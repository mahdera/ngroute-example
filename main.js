var mainApp = angular.module("mainApp", ['ngRoute']);

mainApp.config(function($routeProvider) {
    $routeProvider
        .when('/home', {
            templateUrl: 'app/views/home.html',
            controller: 'StudentController'
        })
        .when('/viewStudents', {
            templateUrl: 'app/views/viewStudents.html',
            controller: 'StudentController'
        })
        .when('/addStudent', {
            templateUrl: 'app/views/addStudent.html',
            controller: 'StudentController'
        })
        .otherwise({
            redirectTo: '/home'
        });
});
