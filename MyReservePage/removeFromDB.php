<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "peminjamanruangan";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the ID parameter from the request
$id = $_GET['id'];

// SQL query to delete data with the given ID
$sql = "DELETE FROM forms WHERE `forms`.`id` = $id";

// Execute the query
if ($conn->query($sql) === TRUE) {
  echo "Data removed successfully";
} else {
  echo "Error removing data: " . $conn->error;
}

// Close the connection
$conn->close();
?>