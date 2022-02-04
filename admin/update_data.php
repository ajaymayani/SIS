<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
}
include '../partial/_config.php';
if(isset($_POST['update']) && $_SERVER['REQUEST_METHOD']=="POST")
{

    $studentId = $_POST['studentId'];
    $firstname = $_POST['edit_firstname'];
    $middlename = $_POST['edit_middlename'];
    $lastname = $_POST['edit_lastname'];
    $gender = $_POST['edit_gender'];
    $dob = $_POST['edit_dob'];
    $email = $_POST['edit_email'];
    $mobileno = $_POST['edit_mobileno'];
    $adharcard_number = $_POST['edit_adharcard_number'];
    $religion = $_POST['edit_religion'];
    $address = $_POST['edit_address'];
    $semester = $_POST['edit_semester'];
    $course = $_POST['edit_course'];

    $sql = "UPDATE `studentsinfo_tbl` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`dob`='$dob',`emailId`='$email',`mobileno`='$mobileno',`gender`='$gender',`religion`='$religion',`aadharnumber`='$adharcard_number',`address`='$address',`course`='$course',`semester`='$semester' WHERE `studentId`='$studentId'";
    $result = $conn->query($sql);
    if($result){
        header("location:show_all_students.php");
    }else{
        echo "Error : ". $conn->error;
    }
}
