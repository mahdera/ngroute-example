<?php
	/**
	* @author Mahder Neway <mahderalem@gmail.com>
	**/

	require_once ( __DIR__ . '/../dao/StudentDao.php' );

	class StudentService {
		private $studentDao = null;

		public function __construct(){
			$this->studentDao = new StudentDao();
		}

		public function saveStudent($student){
			$studentDao->save($student);
		}

		public function updateStudent($student){
			$studentDao->update($student);
		}

		public function deleteStudent($id){
			$studentDao->delete($id);
		}

		public function getStudent($id){
			return $studentDao->getObject($id);
		}

		public function getAllStudents(){
			return $studentDao->getAllObjects();
		}

	}//end class
?>