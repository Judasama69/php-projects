<?php
$conn = new mysqli("localhost", "root", "", "user_login_system");

if ($conn->connect_error) die("Connection failed");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $check = $conn->prepare("SELECT username FROM users WHERE username = ?");
    $check->bind_param("s", $user);
    $check->execute();

    if ($check->get_result()->num_rows > 0) {
        header();
        exit();
    } else {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $hash);

        if ($stmt->execute()) {
            
            exit();
        }
    }
}
