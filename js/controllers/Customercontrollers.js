app.controller('CustomerController', function($scope, $http) {
    getCustomer();
    
    function getCustomer() {
        $http.get("../../ajax/getCustomer.php").success(function(data) {
            $scope.customers = data;
        });
    };

});
