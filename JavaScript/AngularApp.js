// init angular app
var app = angular.module('myApp', ["ngRoute"]);

// 


//this is an AngularRouter config. for page registeration.
app.config(function($routeProvider) {
    $routeProvider
    .when("/newCustomer", {
        templateUrl : "newCustomer.html"
    })
    .when("/newTech", {
        templateUrl : "newTech.html"
    })
    .when("/findTech", {
        templateUrl : "findTech.html"
    })
});
// 