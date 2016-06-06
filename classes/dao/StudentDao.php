<?php
	/**
  	*	@author mahder.neway <mahderalem@gmail.com>
  	*/

	require_once ( __DIR__ . '/../entity/Student.php' );
  	require_once ( __DIR__ . '/../dbconnection/DBConnection.php' );

  	class StudentDao {

  		public function __construct(){

  		}

  		public function save($student){
  			try{
          $query = "INSERT INTO tbl_student VALUES(" . $student->getId() . ", '" . addslashes($student->getName()) . "', '" . addslashes($student->getCity()) . "')";
          DBConnection::save($query);
  			}catch(Exception $ex){
  				$ex->getMessage();
  			}
  		}

  		public function update($student){
        try{
          $query = "UPDATE tbl_student SET name = '" . addcslashes($student->getName()) . "', city = '" . addslashes($student->getCity()) . "' WHERE id = " . $student->getId();
          DBConnection::save($query);
        }catch(Exception $ex){
          $ex->getMessage();
        }
  		}

  		public function delete($id){
        try{
          $query = "DELETE FROM tbl_student WHERE id = " . $id;
          DBConnection::save($query);
        }catch(Exception $ex){
          $ex->getMessage();
        }
  		}

  		public function getObject($id){
        $object = null;
        try{
          $query = "SELECT * FROM tbl_student WHERE id = " . $id;
          $result = DBConnection::read($query);
          $resultRow = mysqli_fetch_object($result);
          if($resultRow != null){
            $object = $this->constructObject($resultRow);
          }
        }catch(Exception $ex){
          $ex->getMessage();
        }
        return $object;
  		}

  		public function getAllObjects(){
        $objects = array();
        try{
            $query = "SELECT * FROM tbl_student ORDER BY name, city ASC";
            $result = DBConnection::read($query);
            while($resultRow = mysqli_fetch_object($result)){
                $object = $this->constructObject($resultRow);
                $objects[] = $object;
            }
        }catch(Exception $ex){
            $ex->getMessage();
        }
        return $objects;
  		}

  		private function constructObject( $resultRow ){
	      $object = null;
	      if( $resultRow != null ){
	        $object = new Student();
	        $object->setId($resultRow->id);
	        $object->setName(stripslashes($resultRow->name));
	        $object->setCity(stripslashes($resultRow->city));
	      }
	      return $object;
	    }

  	}//end class
?>
