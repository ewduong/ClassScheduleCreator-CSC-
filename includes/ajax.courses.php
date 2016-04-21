<?PHP

include('dbconnect.php');

if (!$db->select_db("fall_2016")) {
	echo $_POST ['semester_id'].'database connection failed '.$db->connect_error();
};

$query = "SELECT DISTINCT `course` FROM `course` WHERE `subject` = '".$_POST ['subject_id']."' ORDER BY `course`";
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

?>