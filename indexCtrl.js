phpApp.controller('IndexCtrl', function ($scope, $http){
    $http.get('people.php').success(function(data) {
        $scope.people = data;
    });
    $http.get('animals.php').success(function(data) {
        $scope.animals = data;
    });
});