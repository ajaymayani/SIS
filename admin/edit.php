<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link.php';?>
</head>

<body>
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-2" style="background-color: #3f5485; height:100vh">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-10">
            <div class="row">
                    <div class="col">
                        <?php 
                        
                        include '../partial/_config.php';
                        session_start();
                        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
                            header("location:login.php");
                        }
                        include '../partial/_nav.php';

                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                    <div class="card my-3">
                    <div class="card-header">
                        <strong> Edit Student Details</strong>
                    </div>
                    <div class="card-body">
                        <?php

                        $stud_id = $_GET['id'];

                        $sql = "select * from studentsinfo_tbl where studentId = $stud_id";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <form action="update_data.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edit_firstname">First Name </label>
                                                <input type="hidden" name="studentId" id="studentId" value="<?php echo $stud_id ?>">
                                                <input type="text" name="edit_firstname" id="edit_firstname" class="form-control" value="<?php echo $row['firstname'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edit_middlename">Middle Name </label>
                                                <input type="text" name="edit_middlename" id="edit_middlename" class="form-control" value="<?php echo $row['middlename'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edit_lastname">Last Name </label>
                                                <input type="text" name="edit_lastname" id="edit_lastname" class="form-control" value="<?php echo $row['lastname'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edit_gender">Gender </label>
                                                <select class="form-control" name="edit_gender" id="edit_gender">
                                                    <option selected disabled>Select Gender</option>
                                                    <?php
                                                    if ($row['gender'] === "Male") { ?>
                                                        <option selected value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    <?php  } else { ?>
                                                        <option value="Male">Male</option>
                                                        <option selected value="Female">Female</option>

                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edit_dob">Date of Birth </label>
                                                <input type="date" name="edit_dob" id="edit_dob" class="form-control text-dark" value="<?php echo $row['dob'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="edit_semester">Semester </label>
                                                <select name="edit_semester" class="form-control" id="edit_semester">
                                                    <option selected disabled>Select Course</option>

                                                    <?php
                                                    $semester = $row['semester'];

                                                    if ($semester == "1") {
                                                        echo '<option selected value="1">1</option>';
                                                        echo '<option  value="2">2</option>';
                                                        echo '<option  value="3">3</option>';
                                                        echo '<option  value="4">4</option>';
                                                        echo '<option  value="5">5</option>';
                                                        echo '<option  value="6">6</option>';
                                                    } else if ($semester == "2") {
                                                        echo '<option  value="1">1</option>';
                                                        echo '<option selected value="2">2</option>';
                                                        echo '<option  value="3">3</option>';
                                                        echo '<option  value="4">4</option>';
                                                        echo '<option  value="5">5</option>';
                                                        echo '<option  value="6">6</option>';
                                                    } else if ($semester == "3") {

                                                        echo '<option  value="1">1</option>';
                                                        echo '<option  value="2">2</option>';
                                                        echo '<option selected value="3">3</option>';
                                                        echo '<option  value="4">4</option>';
                                                        echo '<option  value="5">5</option>';
                                                        echo '<option  value="6">6</option>';
                                                    } else if ($semester == "4") {

                                                        echo '<option  value="1">1</option>';
                                                        echo '<option  value="2">2</option>';
                                                        echo '<option  value="3">3</option>';
                                                        echo '<option selected value="4">4</option>';
                                                        echo '<option  value="5">5</option>';
                                                        echo '<option  value="6">6</option>';
                                                    } else if ($semester == "5") {

                                                        echo '<option  value="1">1</option>';
                                                        echo '<option  value="2">2</option>';
                                                        echo '<option  value="3">3</option>';
                                                        echo '<option  value="4">4</option>';
                                                        echo '<option selected value="5">5</option>';
                                                        echo '<option  value="6">6</option>';
                                                    } else if ($semester == "6") {

                                                        echo '<option  value="1">1</option>';
                                                        echo '<option  value="2">2</option>';
                                                        echo '<option  value="3">3</option>';
                                                        echo '<option  value="4">4</option>';
                                                        echo '<option  value="5">5</option>';
                                                        echo '<option selected value="6">6</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="edit_course">Course </label>
                                                <select name="edit_course" class="form-control" id="edit_course">
                                                    <option>Select Course</option>
                                                    <?php
                                                    $sql = "SELECT * FROM `coursesinfo_tbl`";
                                                    $result = $conn->query($sql);
                                                    while ($rows = $result->fetch_assoc()) {

                                                        if ($row['course'] == $rows['cid']) {
                                                            $selected = "selected";
                                                        } else {
                                                            $selected = "";
                                                        }

                                                        echo '<option ' . $selected . ' value=' . $rows['cid'] . '>' . $rows['cname'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edit_email">Email </label>
                                                <input type="email" name="edit_email" id="edit_email" class="form-control" value="<?php echo $row['emailId']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edit_mobileno">Mobile No </label>
                                                <input type="number" name="edit_mobileno" id="edit_mobileno" class="form-control" value="<?php echo $row['mobileno']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edit_adharcard_number">Adhar Card Number </label>
                                                <input type="text" name="edit_adharcard_number" id="edit_adharcard_number" maxlength="12" class="form-control" value="<?php echo $row['aadharnumber']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edit_religion">Religion</label>
                                                <input type="text" name="edit_religion" id="edit_religion" class="form-control" value="<?php echo $row['religion']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="edit_address">Address</label>
                                                <textarea name="edit_address" id="edit_address" class="form-control"><?php echo $row['address']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="submit" name="update" id="update" value="Update Student" class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                </form>
                        <?php
                            }
                        } ?>

                    </div>
                    </div>
                    </div>
                </div </div>
            </div>
        </div>
        <?php include '../partial/_footer.php'; 
        include 'script.php';
        ?>
</body>

</html>