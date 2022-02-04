<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
}

$stu_id = $_GET['id'];

include '../partial/_config.php';

$sql = "DELETE FROM studentsinfo_tbl WHERE studentId = {$stu_id}";
$result = $conn->query($sql) or die("Query Unsuccessful.");

header("Location: show_all_students.php");

$conn->close();

?>
