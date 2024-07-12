<?php
$servername = "localhost";
$username = "uped1296_uped1296";
$password = "Akusukamakan14_";
$dbname = "uped1296_peminjaman";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>