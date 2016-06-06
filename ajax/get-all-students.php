<?php
    require_once ( __DIR__ . '/../classes/service/StudentService.php' );
    $students = array();
    $studentService = new StudentService();
    $studentList = $studentService->getAllStudents();
    foreach($studentList as $student){
        $studentArray['name'] = $student->getName();
        $studentArray['city'] = $student->getCity();
        $students[] = $studentArray;
    }//end foreach...loop
    echo json_encode($students);
?>
