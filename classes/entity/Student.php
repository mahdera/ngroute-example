<?php
	/**
	 *  @author Mahder Neway <mahderalem@gmail.com>
	 *
	*/
	class Student {
		private $id;
		private $name;
		private $city;

		public function __construct(){
			$this->init();
		}

		private function init(){
			$this->id = 0;
			$this->name = null;
			$this->city = null;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getId(){
			return $this->id;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name;
		}

		public function setCity($city){
			$this->city = $city;
		}

		public function getCity(){
			return $this->city;
		}

	}//end class
?>