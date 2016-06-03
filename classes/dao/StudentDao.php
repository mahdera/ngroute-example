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

  			}catch(Exception $ex){
  				$ex->getMessage();
  			}
  		}

  		public function update($student){

  		}

  		public function delete($id){

  		}

  		public function getObject($id){

  		}

  		public function getAllObjects(){

  		}

  		private function constructObject( $resultRow ){
	      $ad = null;
	      if($resultRow != null){
	        $ad = new Ad();
	        $ad->setId($resultRow->id);
	        $ad->setTitle(stripslashes($resultRow->title));
	        $ad->setOverlayText(stripslashes($resultRow->overlay_text));
	        $ad->setAdImage($resultRow->ad_image);
	        $ad->setClickUrl(stripslashes($resultRow->click_url));
	        $ad->setAdText(stripslashes($resultRow->ad_text));
	        $ad->setContactName(stripslashes($resultRow->contact_name));
	        $ad->setContactPhone(stripslashes($resultRow->contact_phone));
	        $ad->setContactEmail(stripslashes($resultRow->contact_email));
	        $ad->setAdFirstPublishedDate($resultRow->ad_first_published_date);
	        $ad->setAdEndDate($resultRow->ad_end_date);
	        $ad->setModifiedBy($resultRow->modified_by);
	        $ad->setModificationDate($resultRow->modification_date);
	      }
	      return $ad;
	    }

  	}//end class
?>