<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "library_db_system";

$conn = new mysqli($server, $user, $pass, $dbname);
if($conn->connect_error) {
	die ("connection failed " . $conn->connect_error);
}