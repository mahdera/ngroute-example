<?php
	require_once ( __DIR__ . '/../classes/service/StudentService.php' );
	require_once ( __DIR__ . '/../classes/entity/Student.php' );

	//$data = json_decode(file_get_contents('php://input'), true);
	//print_r($data);
	//echo $data["operacion"];
	// Getting posted data and decodeing json
	$_POST = json_decode(file_get_contents('php://input'), true);

	$name = $_POST['name'];
	$city = $_POST['city'];
	
	$student = new Student();
	$student->setName($name);
	$student->setCity($city);
	$studentService = new StudentService();
	$studentService->saveStudent($student);
?>
