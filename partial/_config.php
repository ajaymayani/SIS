<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "SISDB";

$conn = new mysqli($servername,$username,$password,$dbname) or die("Connection Failed");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";
?>
