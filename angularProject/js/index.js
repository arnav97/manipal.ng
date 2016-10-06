var app=angular.module('App',['ngRoute']); // Registering new module as App and maintaining its dependency by angular-route using keyword

app.config(function($routeProvider, $locationProvider){ // we are making some congigurations in app       $routeProvider, $locationProvider these files we r getting from angular-route.js file
	$routeProvider
	.when('/',{
		templateUrl:'templates/login.html',
		controller:'LoginController'
	}).when('/dashboard',{
		templateUrl:'templates/dashboard.html',
		controller:'DashboardController'
	});
	});

app.controller('LoginController', ['$scope','$http', '$location', '$rootScope', function($scope, $http, $location, $rootScope) {
    //$scope.user = { name: 'John Doe', age: 22 };

    $scope.user={};

    $scope.login=function(user){

        console.log(user);

        $http({
            method:"POST",
            url:"http://localhost/angularProject/verify_user.php",
            data:{
                'email':user.email,
                'password':user.password
            }
        }).then(function(response){
            if(response.data!="false"){
                $rootScope.user=response.data;
                console.log(response.data.email);
                $location.path('/dashboard');
            }else{
                sweetAlert('Login Failed');
            }
        }, function(error){});
    };

}]).controller('DashboardController', ['$scope', '$rootScope', function($scope, $rootScope) {
    $scope.user = $rootScope.user;
}]).controller('LogoutController', ['$scope', function($scope) {
    $scope.user = { name: 'John Doe', age: 22 };
}]);