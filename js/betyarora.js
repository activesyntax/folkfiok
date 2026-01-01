app.controller('BetyaroraController', function ($scope, $http) {

   
    $scope.showValidationMessages = false;

    $scope.add_request = function () {

        $scope.showValidationMessages = true;
        if ($scope.requestForm.$invalid)
            return false;

        $http.post('betyarora/add-request',
                {'name': $scope.name, 'email': $scope.email, 'message': $scope.message}
        )
                .then($scope.add_request_success, $scope.add_request_error);
    };


    $scope.add_request_success = function (response) {
        console.log("SUCCESS: " + response.data);
        $('#add-request-success').modal('show');
    };

    $scope.clearForm = function () {
        $scope.name = '';
        $scope.email = '';
        $scope.message = '';
        $scope.requestForm.$setPristine(true);
        $scope.showValidationMessages = false;
    };

    $scope.add_request_error = function (response) {
        console.log("SERVER ERROR: " + response.data);
        $('#error-dialog').modal('show');

    };



});

$(document).ready(function () {
    $('#add-request-success').on('hide.bs.modal', function (e) {
        document.getElementById("requestForm").reset();
    })  ;
});