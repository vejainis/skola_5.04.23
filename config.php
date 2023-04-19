<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$db = "todolist";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>