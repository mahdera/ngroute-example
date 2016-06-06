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
			$this->studentDao->save($student);
		}

		public function updateStudent($student){
			$this->studentDao->update($student);
		}

		public function deleteStudent($id){
			$this->studentDao->delete($id);
		}

		public function getStudent($id){
			return $this->studentDao->getObject($id);
		}

		public function getAllStudents(){
			return $this->studentDao->getAllObjects();
		}

	}//end class
?>
