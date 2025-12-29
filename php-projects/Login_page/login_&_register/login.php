<?php
session_start();
$conn = new mysqli("localhost", "root", "", "user_login_system");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($pass, $row['password'])) {
            $_SESSION['user'] = $user;
            echo "Logged in as " . $_SESSION['user'];
        } else {
            echo "Wrong password.";
        }
    } else {
        echo "User not found.";
    }
}
