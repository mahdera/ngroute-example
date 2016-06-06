mainApp.controller('StudentController', function($scope, $http) {

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

    $scope.message = "Click on the hyper link to view the students list.";

    $scope.addStudent = function(){
        /*$http.post("ajax/add-student.php?name=" + encodeURIComponent($scope.studentName) + "&city=" + encodeURIComponent($scope.studentCity)).success(function(data){
            //clear the input box.
            $scope.studentName = "";
            $scope.studentCity = "";
        });*/
        var dataString = "name=" + encodeURIComponent($scope.studentName) + "&city=" + encodeURIComponent($scope.studentCity);
        $http({
            url: 'ajax/add-student.php',
            method: 'POST',
            data: {name: $scope.studentName,city: $scope.studentCity},
            headers: {'Content-Type': 'application/json'}
        }).success(function (data, status, headers, config) {
            $scope.studentName = "";
            $scope.studentCity = "";
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
