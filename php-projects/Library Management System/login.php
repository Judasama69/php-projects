<?php
include 'db.php';

$conn = new mysqli("localhost", "root", "", "library_db_system");
if ($conn->connect_error) die("Connection failed");

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$email = $_POST['email'];
    $password =$_POST['password'];

	$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt ->bind_param("s", $email);
    $stmt ->execute();

    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid Password";
        }
    } else {
        echo "No account found with that email";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "heading.php"; ?>
<body>
<div class="container">
    <div class="form_area">
        <p class="title">LOGIN </p>
        <form action="login.php" method="post">
            <div class="form_group">
                <label class="sub_title" for="email">Email</label>
                <input name="email" placeholder="Enter your email" id="email" class="form_style" type="email">
            </div>
            <div class="form_group">
                <label class="sub_title" for="password">Password</label>
                <input name="password" placeholder="Enter your password" id="password" class="form_style" type="password">
            </div>
            <div>
                <button class="btn">Login</button>
                <p>Don't have an Account? <a class="link" href="register.php">Register Here!</a></p><a class="link" href="">
            </a></div><a class="link" href="">

</a></div>
</body>
</html>