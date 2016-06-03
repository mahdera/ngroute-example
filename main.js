var mainApp = angular.module("mainApp", ['ngRoute']);

mainApp.config(function($routeProvider) {
    $routeProvider
        .when('/home', {
            templateUrl: 'app/partials/home.html',
            controller: 'StudentController'
        })
        .when('/viewStudents', {
            templateUrl: 'app/partials/viewStudents.html',
            controller: 'StudentController'
        })
        .when('/addStudent', {
            templateUrl: 'app/partials/addStudent.html',
            controller: 'StudentController'
        })
        .otherwise({
            redirectTo: '/home'
        });
});
