angular.module('folkfiok', ['ngCookies'])
        .controller('ShoppingCartController', ['$scope', '$cookies','$rootScope', ShoppingCartController]);

function ShoppingCartController($scope, $cookies, $rootScope) {
//    $scope.name = 'John Smith';
//    $scope.contacts = [
//        {type: 'phone', value: '408 555 1212'},
//        {type: 'email', value: 'john.smith@example.org'}
//    ];

    $rootScope.items = $cookies.getObject('items') || [];
    
    $scope.addProduct = function (productId, title, price) {
        
        $rootScope.items.push({
            productId: productId,
            title: title,
            quantity: 1,
            price: price
        });
        $cookies.putObject('items', $scope.items);

        $scope.showCart();
        
    };

    $scope.getProducts = function ()
    {
        return $cookies.getObject('items') || [];
    };

    $scope.showCart = function () {
        $('#shopping-cart-dialog').modal('show');
    };
    
    $scope.isProductInTheCart = function(productId)
    {
        for (var i = 0; i < $rootScope.items.length; i++) {
            
            if($rootScope.items[i].productId === productId)
                return true;
        }
        return false;
    };
}


