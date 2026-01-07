<?php
include 'db.php';
$conn = new mysqli("localhost", "root", "", "library_db_system");

if ($conn->connect_error) die("Connection failed");

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password  = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$role = $_POST['role'];

	$stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $password, $role);


	if ($stmt->execute()) {
		echo "Registered Successfully";
	} else {
		echo "Error : " . $stmt->error;
	}

    $stmt->close();
}
?>
//commit
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="post">
			<input type="text" name="name">
			<input type="email" name="email">
            <input type="password" name="password">
			<input type="text" name="role" value="user" hidden>
			<button type="submit">Sign Up</button>
	</form>
</body>
</html>

