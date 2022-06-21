<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "glpi";
$dbnamept="pt_print";


$conn = mysqli_connect ($servername, $username, $password, $dbnamept);
	if ($conn->connect_error) {
		die("Connection failed " . $conn->connect_error);
	}

?>
