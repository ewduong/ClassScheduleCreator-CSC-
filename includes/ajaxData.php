<?php
//Include database configuration file
//include('../ajax.config.php');

print_r($_POST);

if(isset($_POST["semester_id"]) && !isset($_POST["subject_id"])){

	include('dbconnect.php');
	if (!$conn->select_db(trim($_POST["semester_id"]))) {
		echo $_POST ['semester_id'].'database connection failed '.$conn->connect_error();
	};

	$query = "SELECT DISTINCT `subject` FROM `course` ORDER BY `subject`";
	echo $query.'<br>';
	$result = $conn->query ($query);  
    $rowCount = $result->num_rows;
    if($rowCount > 0){
		echo '<option value="">Select subject</option>';
		while($data = $result->fetch_assoc()){ 
			echo '<option value="'.$data['subject'].'">'.$data['subject'].'</option>';
        }
    }else{
        echo '<option value="">No Subjects</option>';
    }
}

if(isset($_POST["subject_id"]) && !empty($_POST["subject_id"])){

	include('dbconnect.php');
	if (!$conn->select_db(trim($_POST["semester_id"]))) {
		echo $_POST ['semester_id'].'database connection failed '.$conn->connect_error();
	};

	$query = "SELECT DISTINCT `course` FROM `course` WHERE `subject` = '".$_POST ['subject_id']."' ORDER BY `course`";
	echo $query.'<br>';
    $result = $conn->query($query);
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