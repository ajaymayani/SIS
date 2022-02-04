<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
}
$id = $_GET['id'];

include '../partial/_config.php';

$sql = "DELETE FROM attendance WHERE id= {$id}";
$result = $conn->query($sql) or die("Query Unsuccessful.");

header("Location: show_student_attendance.php");

$conn->close();

?>
