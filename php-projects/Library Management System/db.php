<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "library_db_system";

$conn = new mysqli($server, $user, $pass, $dbname);
if(!$conn) {
	echo "Opps! : $conn->connect_error";
}