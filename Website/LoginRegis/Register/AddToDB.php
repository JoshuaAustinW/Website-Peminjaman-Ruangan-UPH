<?php
require '../../db.php';

session_start();

$username = strtolower($_SESSION['regis_username']);
$password = password_hash($_SESSION['regis_password'], PASSWORD_DEFAULT);
$email = strtolower($_SESSION['regis_email']);
$authority = "user";

$stmt = $conn->prepare("INSERT INTO users (username, password, email, authority) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $password, $email, $authority);


if ($stmt->execute()) {
    $alert = "Registration successful!";

    unset($_SESSION['regis_username']);
    unset($_SESSION['regis_password']);
    unset($_SESSION['regis_email']);

    echo "  <script type='text/javascript'>
                alert('$alert');
                window.location.href = '../Login/Login.php';
            </script>                       ";
} else {
    $alert = "Error: " . $stmt->error;
    echo "  <script type='text/javascript'>
                alert('$alert');
                window.location.href = 'Register.php';
            </script>                                           ";
}

$stmt->close();