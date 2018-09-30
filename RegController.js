var app=angular.module('myApp',['ngRoute'])
      app.config(['$routeProvider', function($routeProvider){
         $routeProvider
   
            .when('/gdetails',{
               
               templateUrl : "gdetails.htm"
            })

            .when('/impdetails',{
               
               templateUrl : "impdetails.htm"
            })

            .when('/bdetails',{
               
               templateUrl : "bdetails.htm"
            })

            .when('/agdetails',{
               
               templateUrl : "agdetails.htm"
            })
            }])
      app.controller('registerctr' , function($scope){
         $scope.m1 = "+"
         $scope.m2 = "+"
         $scope.m3 = "+"
         $scope.m4 = "+"


         $scope.f1=function(m1){
            if($scope.m1 == "+"){
               $scope.m1 = "-";
               $scope.activemod = "active";
            }else{
               $scope.m1 = "+";
               $scope.activemod = "";
            }
         }
         $scope.f2=function(m2){
            if($scope.m2 == "+"){
               $scope.m2 = "-";
               $scope.activemod1 = "active";
            }else{
               $scope.m2 = "+";
               $scope.activemod1 = "";
            }
         }
         $scope.f3=function(m3){
            if($scope.m3 == "+"){
               $scope.m3 = "-";
               $scope.activemod2 = "active";
            }else{
               $scope.m3 = "+";
               $scope.activemod2 = "";
            }
         }
         $scope.f4=function(m4){
            if($scope.m4 == "+"){
               $scope.m4 = "-";
               $scope.activemod3 = "active";
            }else{
               $scope.m4 = "+";
               $scope.activemod3 = "";
            }
         }
      })