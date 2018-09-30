var app=angular.module('myapp',['ngRoute'])
		app.config(['$routeProvider', function($routeProvider){
			$routeProvider
				
				.when('/',{
					
					templateUrl : 'HomePage/HomePage.html'
					
				})
				.when('/Home',{
					
					templateUrl : 'HomePage/HomePage.html'
					
				})
				.when('/AboutUs',{
					
					templateUrl : 'HomePage/AboutUs.html'
				})
				.when('/HowToUse',{
					
					templateUrl : 'HomePage/HowToUse.html'
				})
				.when('/Contact',{
					
					templateUrl : 'HomePage/Contact.html'
				})
				.when('/SignIn',{
					templateUrl : 'SignIn/SignIn.html'
				})
				.when('/SignUp',{
					templateUrl : 'SignUp/SignUp.html'
				})

			}])
		/*app.controller('homectr',function($scope,$firebaseObject){
			var ref = firebase.database().ref();
			$scope.name = $firebaseObject(ref);
		})*/
		
		