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

<!DOCTYPE html>
<html lang="en">
<?php include "heading.php"; ?>
<body>
<div class="container">
    <div class="form_area">
        <p class="title">SIGN UP</p>
        <form action="register.php" method="post">
            <div class="form_group">
                <label class="sub_title" for="name">Name</label>
                <input placeholder="Enter your full name" class="form_style" type="text">
            </div>
            <div class="form_group">
                <label class="sub_title" for="email">Email</label>
                <input placeholder="Enter your email" id="email" class="form_style" type="email">
            </div>
            <div class="form_group">
                <label class="sub_title" for="password">Password</label>
                <input placeholder="Enter your password" id="password" class="form_style" type="password">
            </div>
            <div>
                <button class="btn">SIGN UP</button>
                <p>Have an Account? <a class="link" href="login.php">Login Here!</a></p><a class="link" href="">
            </a></div><a class="link" href="">

</a></div>
</body>
</html>

