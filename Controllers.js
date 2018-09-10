var app=angular.module('myapp',['ngRoute'])
		app.config(['$routeProvider', function($routeProvider){
			$routeProvider
				
				.when('/',{
					
					templateUrl : 'HomePage.html'
				})
				.when('/Home',{
					
					templateUrl : 'HomePage.html'
				})
				.when('/AboutUs',{
					
					templateUrl : 'AboutUs.html'
				})
				.when('/HowToUse',{
					
					templateUrl : 'HowToUse.html'
				})
				.when('/Contact',{
					
					templateUrl : 'Contact.html'
				})
				}])
		.controller('myctr' , function($scope){
		})
