<?php
	require_once ( __DIR__ . '../classes/service/StudentService.php' );
	$data = json_decode(file_get_contents('php://input'), true);
	//print_r($data);
	//echo $data["operacion"];
	$name = $data['name'];
	$city = $data['city'];

?>