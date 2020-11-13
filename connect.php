<?php
$servername = "databaseitf.mysql.database.azure.com";
$username = "superoof@databaseitf";
$password = "Pin187932";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
