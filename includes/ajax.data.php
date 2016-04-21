<?php

print_r($_POST);

if ($_POST ['country']) {
	include('includes/dbconnect.php');
	if (!$db->select_db($_POST ['country'])) {
		echo $_POST ['country'].'database connection failed '.$db->connect_error();
	};
}else{
	echo 'no country';
	return;
}


if( ( isset($_POST["country"]) && !empty($_POST["country"]) )&&( isset($_POST["state"]) && !empty($_POST["state"]) ) ){
	echo 'MADE IT'.$_POST["country"];
	$query = "SELECT * FROM `course` WHERE subject = ".$_POST['state']." ORDER BY course";
    $result = $db->query($query);
    $rowCount = $result->num_rows;
    if($rowCount > 0){
        echo '<option value="">Select course</option>';
        while($data = $result->fetch_assoc()){ 
            echo '<option value="'.$data['city'].'">'.$data['city'].'</option>';
        }
    }else{
        echo '<option value="">no courses</option>';
    }
}
elseif( isset($_POST["country"]) && !empty($_POST["country"]) ) {
	$query = "SELECT DISTINCT `subject` FROM `course` ORDER BY `subject`";
	$result = $db->query ($query);  
    $rowCount = $result->num_rows;
    if($rowCount > 0){
        echo '<option value="">Select subject</option>';
        while($data = $result->fetch_assoc()){ 
            echo '<option value="'.$data['state'].'">'.$data['state'].'</option>';
        }
    }else{
        echo '<option value="">No Subjects</option>';
    }
}
else
{
	echo 'nothing to report';
}

?>