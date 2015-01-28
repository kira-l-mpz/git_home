function personController($scope, $http) {
    $scope.anime = "Death_Note";
    $scope.hero = "Kira";
    $scope.count = 0;
    
    $scope.description = function() {
        return $scope.anime + " : " + $scope.hero;
    }
    
    $scope.ssorter = function(x) {
        return x;
    }
    
    $http.get("http://localhost/angularjsapp/Customers_JSON.php")
    .success(function(response) {
        $scope.cus_names = response;   
    });
}