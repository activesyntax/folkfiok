app.controller('ShoppingCartController', ['$scope', '$rootScope', '$http', ShoppingCartController]);

function ShoppingCartController($scope, $rootScope, $http) {

    $rootScope.cart = JSON.parse(localStorage.getItem('cart')) || [];

    $rootScope.currencyCode = JSON.parse(localStorage.getItem('currencyCode')) || [];
    
    $scope.setCurrencyCode = function(currencyCode){
         localStorage.setItem('currencyCode', JSON.stringify(currencyCode));
    };


    $scope.addProduct = function (productId, title, author, price, productImage) {

        $rootScope.cart.push({
            productId: productId,
            title: title,
            author: author,
            quantity: 1,
            price: price,
            productImage: productImage
        });
        localStorage.setItem('cart', JSON.stringify($scope.cart));

        $scope.showCart();
    };

    $scope.specialProductsPrice = function()
    {
         return $scope.currencyCode === 'EUR' ? '8.20 €' : '2500 Ft';
    }

    $scope.addSpecialProducts = function () {

        price1 = $scope.currencyCode === 'EUR' ? 2.3 : 700;

        if ($scope.isProductInTheCart('tobb-tucat-feladat-bakonyi-betyarmesekhez')) {
            $scope.increaseProductQuantity('tobb-tucat-feladat-bakonyi-betyarmesekhez');
        } else {
            $scope.addProduct('tobb-tucat-feladat-bakonyi-betyarmesekhez', 'Több tucat feladat bakonyi betyármesékhez (munkafüzet)', 'Csatlós Melinda', price1, 'img/books/thumb/tobb-tucat-feladat-bakonyi-betyarmesekhez.jpg');
        }

        price2 = $scope.currencyCode === 'EUR' ? 5.9 : 1800;
        if ($scope.isProductInTheCart('egy-tucat-bakonyi-betyarmese')) {
            $scope.increaseProductQuantity('egy-tucat-bakonyi-betyarmese');
        } else {
            $scope.addProduct('egy-tucat-bakonyi-betyarmese', 'Egy tucat bakonyi betyármese', 'Csatlós Melinda', price2, 'img/books/thumb/egy-tucat-bakonyi-betyarmese.jpg');
        }

        $scope.showCart();
    };

    $scope.showCart = function () {
        $('#shopping-cart-dialog').modal('show');
    };

    $scope.showOrderDialog = function () {
        window.location.href = './rendeles';
    };

    $scope.isProductInTheCart = function (productId)
    {
        for (var i = 0; i < $rootScope.cart.length; i++) {

            if ($rootScope.cart[i].productId === productId)
                return true;
        }
        return false;
    };

    $scope.emptyCart = function () {
        $rootScope.cart = [];
        localStorage.removeItem('cart');
    };

    $scope.isEmpty = function () {
        return $rootScope.cart.length === 0;
    };


    $scope.shippingCosts = function (currencyCode) {

        shippingCostPerBook = currencyCode === 'EUR' ? 0.5 : 150;

        totalQuantity = 0;
        for (var i = 0; i < $rootScope.cart.length; i++) {

            totalQuantity += $rootScope.cart[i].quantity;
        }

        if (totalQuantity % 2 === 0) {
            return totalQuantity * shippingCostPerBook;
        } else {
            return (totalQuantity + 1) * shippingCostPerBook;
        }
    };

    $scope.totalAmount = function (currencyCode)
    {
        totalAmount = 0;
        for (var i = 0; i < $rootScope.cart.length; i++) {

            totalAmount += $rootScope.cart[i].price * $rootScope.cart[i].quantity;
        }
        return totalAmount + $scope.shippingCosts(currencyCode);
    };

    $scope.totalQuantity = function ()
    {
        return $rootScope.cart.length;
    };


    $scope.removeProduct = function (productId) {
        index = $scope.getProductIndex(productId);
        if (index > -1) {
            $rootScope.cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify($scope.cart));
        }
    };

    $scope.getProductIndex = function (productId)
    {
        for (var i = 0; i < $rootScope.cart.length; i++) {

            if ($rootScope.cart[i].productId === productId)
                return i;
        }
        return -1;
    };

    $scope.changeProductQuantity = function (productId, amount) {
        index = $scope.getProductIndex(productId);
        if (index > -1) {
            $rootScope.cart[index].quantity = Math.max(1, $rootScope.cart[index].quantity + amount);
            localStorage.setItem('cart', JSON.stringify($scope.cart));
        }
    };

    $scope.increaseProductQuantity = function (productId) {
        $scope.changeProductQuantity(productId, 1);
    };

    $scope.decreaseProductQuantity = function (productId) {
        $scope.changeProductQuantity(productId, -1);
    };

    $scope.payMethod = {name: 'bank'};
    $scope.termsOfPurchase = true;

    $scope.showValidationMessages = false;

    $scope.order = function (currencyCode) {

        $scope.showValidationMessages = true;
        if ($scope.orderForm.$invalid)
            return false;

        $http.post('order/add',
                {
                    'customer_name': $scope.customer_name,
                    'customer_email': $scope.customer_email,
                    'ship_address': $scope.ship_address,
                    'products': $rootScope.cart,
                    'pay_method': $scope.payMethod.name,
                    'total_amount': $scope.totalAmount(currencyCode),
                    'shipping_costs': $scope.shippingCosts(currencyCode)
                }
        )
                .then($scope.order_success, $scope.order_error);
    };

    $scope.order_success = function (response) {
        console.log("RESPONSE DATA: " + response.data);
//        $('#order-dialog').modal('hide');
        $('#order-success-dialog').modal('show');

    };

    $scope.order_error = function (response) {
        console.log("SERVER ERROR: " + response.data);
//        $('#order-dialog').modal('hide');        
        $('#error-dialog').modal('show');

    };

    $scope.clearForm = function () {
        $scope.customer_name = '';
        $scope.customer_email = '';
        $scope.ship_address = '';
        $scope.emptyCart();
        $scope.requestForm.$setPristine(true);
        $scope.showValidationMessages = false;
    };

}

$(document).ready(function () {
    $('#order-success-dialog').on('hide.bs.modal', function (e) {
//        angular.element('#ShoppingCartController').scope().clearForm();
//        angular.element('#ShoppingCartController').scope().$apply(); 
        localStorage.removeItem('cart');   // TODO: find nicer solution
        window.location = document.referrer;
    });
});

