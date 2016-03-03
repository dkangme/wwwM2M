var app = angular.module('angularTable', []);

app.controller('listdata',function($scope, $http){

	$scope.sensores = []; //declare an empty array
    
    $http.get("/admin/sensor/json").success(function(response){ 
        $scope.sensores = response;  //ajax request to fetch data into $scope.data
    });

    $scope.sort = function(keyname){
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
    }

});