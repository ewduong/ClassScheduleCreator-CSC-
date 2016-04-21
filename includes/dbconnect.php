<?php

if ($_SERVER ['SERVER_NAME'] == 'localhost') {
	$servername = "localhost";
	$username = "root";
	$password = "";	

}else{
	$servername = "localhost";
	$username = "scheduleit";
	$password = "Software2016!";
	$database = 'spring_2016';
}

// Create connection
$db = new mysqli($servername, $username, $password, $database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
?>
