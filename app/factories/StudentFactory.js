mainApp.factory('studentFactory', ['$http', '$rootScope', function($http, $rootScope) {
  var students = [];
  
  return {
    getStudents: function() {
      return $http.get('ajax/get-all-students.php').then(function(response) {
        students = response.data;
        $rootScope.$broadcast('handleStudentFactory', students);
        return students;
      })
    },
    saveStudent: function($params) {
      return $http({
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        url: 'ajax/add-student.php',
        method: "POST",
        data: $params,
      })
      .success(function(addData) {
        students = addData;
        $rootScope.$broadcast('handleStudentFactory', students);
      });
    }
  };
}]);