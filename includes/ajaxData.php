<?php

print_r($_POST);

if(isset($_POST["semester_id"]) && !isset($_POST["subject_id"])){

	include('dbconnect.php');
/*	if (!$db->select_db()) {
		echo $_POST ['semester_id'].'database connection failed '.$db->connect_error();
	};*/
	$table = trim($_POST["semester_id"]);
	$query = "SELECT DISTINCT `subject` FROM `course_".$table."` ORDER BY `subject`";
	echo $query.'<br>';
	$result = $db->query ($query);  
    $rowCount = $result->num_rows;
    if($rowCount > 0){
		echo '<option value="">Select subject</option>';
		while($data = $result->fetch_assoc()){ 
//			print_r ($data);
			echo '<option value="'.$data['subject'].'">'.$data['subject'].'</option>';
        }
    }else{
        echo '<option value="">No Subjects</option>';
    }
}

if(isset($_POST["subject_id"]) && !empty($_POST["subject_id"])){

	include('dbconnect.php');
/*	if (!$db->select_db()) {
		echo $_POST ['semester_id'].'database connection failed '.$db->connect_error();
	};*/
		$table = trim($_POST["semester_id"]);
	$query = "SELECT DISTINCT `course` FROM `course_".$table."` WHERE `subject` = '".$_POST ['subject_id']."' ORDER BY `course`";
	echo $query.'<br>';
    $result = $db->query($query);
    $rowCount = $result->num_rows;
    if($rowCount > 0){
        echo '<option value="">Select course</option>';
        while($data = $result->fetch_assoc()){ 
            echo '<option value="'.$data['course'].'">'.$data['course'].'</option>';
        }
    }else{
        echo '<option value="">no courses</option>';
    }
}

?>