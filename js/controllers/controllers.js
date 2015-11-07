app.controller('CustomerController', function($scope, $http) {
    getCustomer();
    
    function getCustomer() {
        $http.get("ajax/getCustomer.php").success(function(data) {
            $scope.customers = data;
        });
    };

});


app.controller('ProductController', function($scope, $http) {
    getProduct();
    
    function getProduct() {
        $http.get("ajax/getProduct.php").success(function(data) {
            $scope.products = data;
        });
    };

});
