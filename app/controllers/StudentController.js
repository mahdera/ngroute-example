mainApp.controller('StudentController', function($scope) {
    $scope.students = [
        {name: 'Mark Waugh', city:'New York'},
        {name: 'Steve Jonathan', city:'London'},
        {name: 'John Marcus', city:'Paris'}
    ];

    $scope.message = "Click on the hyper link to view the students list.";

    $scope.addStudent = function(){
        //console.log('Inside addStudent function: name : ' + $scope.studentName + ' city : ' + $scope.studentCity);
        $scope.students.push({name: $scope.studentName, city: $scope.studentCity});
        console.log('Finished adding to the array');
        //now show the value to the console...
        angular.forEach($scope.students, function(student){
            console.log(student.name + ' : ' + student.city);
        });
    };

});
