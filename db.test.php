<?php
$servername = "localhost";
$username = "scheduleit";
$password = "Software2016!";
$database = "spring_2016";

## This is for JTs
/*$servername = "localhost";
$username = "root";
$password = "";
*/
// Create connection
$db = new mysqli($servername, $username, $password, $database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// $query = "SELECT `id`, `location` FROM `times_temp` LIMIT 0, 30";
// $query = "SELECT `id`, `location` FROM `times_temp`";
$query = "select distinct subject from course_summer_2016 order by subject";
$result = $db->query ($query);
while ($data = $result->fetch_assoc())
{
//	echo $data['location'].'<br>';
/*	if ($data['location'] == 'TBA')	{
		$query = "UPDATE `times_temp` SET `building`='TBA', `room`='TBA' WHERE `id`='".$data['id']."'";
	}else{
		$temp =  explode (" ", $data['location']);
		$query = "UPDATE `times_temp` SET `building`='".$temp[0]."', `room`='".$temp[1]."' WHERE `id`='".$data['id']."'";
		echo $query.'<br>';
		$db->query ($query);
	}*/
	echo $data ['subject'].'<br>';
}
?>