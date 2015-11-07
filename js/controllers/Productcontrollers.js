app.controller('ProductController', function($scope, $http) {
    getProduct();
    
    function getProduct() {
        $http.get("ajax/getProduct.php").success(function(data) {
            $scope.products = data;
        });
    };

});
