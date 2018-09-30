var app = angular.module('myapp',[]);
app.controller('signupctr',function($scope,$http){
	$scope.insertData = function(){

            $http({
               method : 'POST',
               url : 'SignUp/SignUp.php',
               data : {
                  name: $scope.name,
                  email: $scope.email,
                  pswd: $scope.pswd,
                  cpswd: $scope.cpswd
               }
            })    .then(function(response){
                  $scope.output = response.logg;
                   console.log(response.data.stat1);
                  console.log(response.data.stat2);
                  });
   }
})
