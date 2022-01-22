<?php

$id = $_GET['id'];

include '../partial/_config.php';

$sql = "DELETE FROM attendance WHERE id= {$id}";
$result = $conn->query($sql) or die("Query Unsuccessful.");

header("Location: show_student_attendance.php");

$conn->close();

?>
