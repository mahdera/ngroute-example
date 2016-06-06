mainApp.controller('StudentController', function($scope, $http) {

    $scope.student = {};

    $scope.getStudents = function(){
        $http({
            url: 'ajax/get-all-students.php',
            method: 'GET',
            data: null,
            headers: {'Content-Type': 'application/json'}
        }).success(function(data){
            $scope.students = data;
        });
    };    

    $scope.addStudent = function(){        
        $http({
            url: 'ajax/add-student.php',
            method: 'POST',
            data: $scope.student,            
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (data, status, headers, config) {
            $scope.student = {};
            
            //$scope.getStudents();
        }).error(function (data, status, headers, config) {
            console.log('Something went wrong...');
        });
    };

    $scope.updateStudent = function(student){
        $http.post("../../ajax/update-student.php?student=" + encodeURIComponent(student)).success(function(data){
            //do nothing...
        });
    };

    $scope.deleteStudent = function(student){
        if(window.confirm('Are you sure you want to remove student : ' + student.name + ' ?')){
            $http.post("../../ajax/delete-student.php?id=" + student.id ).success(function(data){
               //do nothing...
            });
        }
    };

});
