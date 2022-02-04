<?php
include '../partial/_config.php';
$inserted = false;
session_start();

if (isset($_POST['addResult']) && $_SERVER['REQUEST_METHOD'] == "POST") {

    $studentId = $_POST['id'];
    $stud_name = $_POST['stud_name'];
    $stud_course = $_POST['stud_course'];
    $stud_semester = $_POST['stud_semester'];
    $percentage = $_POST['percentage'];
    $total = $_POST['total'];

    if ($stud_course == "BCA") {
        if ($stud_semester == "1") {
            $BCA101 = $_POST['BCA101'];
            $BCA102 = $_POST['BCA102'];
            $BCA103 = $_POST['BCA103'];
            $BCA104 = $_POST['BCA104'];
            $BCA105 = $_POST['BCA105'];
            $BCA106 = $_POST['BCA106'];

            $sql = "INSERT INTO bca_sem1_result_tbl (`BCA101`,`BCA102`,`BCA103`,`BCA104`,`BCA105`,`BCA106`,`percentage`,`total`,`studentId`) VALUES ('$BCA101','$BCA102','$BCA103','$BCA104','$BCA105','$BCA106','$percentage','$total','$studentId')";
            $result = $conn->query($sql);

            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        } else if ($stud_semester  == "2") {

            $BCA201 = $_POST['BCA201'];
            $BCA202 = $_POST['BCA202'];
            $BCA203 = $_POST['BCA203'];
            $BCA204 = $_POST['BCA204'];
            $BCA205 = $_POST['BCA205'];
            $BCA206 = $_POST['BCA206'];

            $sql = "INSERT INTO bca_sem2_result_tbl (BCA201,BCA202,BCA203,BCA204,BCA205,BCA206,percentage,total,studentId) VALUES ($BCA201,$BCA202,$BCA203,$BCA204,$BCA205,$BCA206,$percentage,$total,$studentId)";

            $result = $conn->query($sql);

            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        } else if ($stud_semester  == "3") {

            $BCA301 = $_POST['BCA301'];
            $BCA302 = $_POST['BCA302'];
            $BCA303 = $_POST['BCA303'];
            $BCA304 = $_POST['BCA304'];

            $sql = "INSERT INTO bca_sem3_result_tbl (BCA301,BCA302,BCA303,BCA304,percentage,total,studentId) VALUES ($BCA301,$BCA302,$BCA303,$BCA304,$percentage,$total,$studentId)";

            $result = $conn->query($sql);

            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        } else if ($stud_semester  == "4") {

            $BCA401 = $_POST['BCA401'];
            $BCA402 = $_POST['BCA402'];
            $BCA403 = $_POST['BCA403'];
            $BCA404 = $_POST['BCA404'];

            $sql = "INSERT INTO bca_sem4_result_tbl (BCA401,BCA402,BCA403,BCA404,percentage,total,studentId) VALUES ($BCA401,$BCA402,$BCA403,$BCA404,$percentage,$total,$studentId)";

            $result = $conn->query($sql);

            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        } else if ($stud_semester  == "5") {

            $BCA501 = $_POST['BCA501'];
            $BCA502 = $_POST['BCA502'];
            $BCA503 = $_POST['BCA503'];

            $sql = "INSERT INTO bca_sem5_result_tbl (BCA501,BCA502,BCA503,percentage,total,studentId) VALUES ($BCA501,$BCA502,$BCA503,$percentage,$total,$studentId)";

            $result = $conn->query($sql);

            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        } else if ($stud_semester  == "6") {
            $BCA601 = $_POST['BCA601'];

            $sql = "INSERT INTO bca_sem6_result_tbl (BCA601,percentage,total,studentId) VALUES ($BCA601,$percentage,$total,$studentId)";

            $result = $conn->query($sql);

            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        }
    } else if ($stud_course == "MSCIT") {
        if ($stud_semester  == "1") {
            $MSCIT101 = $_POST['MSCIT101'];
            $MSCIT102 = $_POST['MSCIT102'];
            $MSCIT103 = $_POST['MSCIT103'];
            $MSCIT104 = $_POST['MSCIT104'];
            $MSCIT105 = $_POST['MSCIT105'];
            $MSCIT106 = $_POST['MSCIT106'];

            $sql = "INSERT INTO mscit_sem1_result_tbl (MSCIT101,MSCIT102,MSCIT103,MSCIT104,MSCIT105,MSCIT106,percentage,total,studentId) VALUES ($MSCIT101,$MSCIT102,$MSCIT103,$MSCIT104,$MSCIT105,$MSCIT106,$percentage,$total,$studentId)";

            $result = $conn->query($sql);
            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        } else if ($stud_semester  == "2") {

            $MSCIT201 = $_POST['MSCIT201'];
            $MSCIT202 = $_POST['MSCIT202'];
            $MSCIT203 = $_POST['MSCIT203'];
            $MSCIT204 = $_POST['MSCIT204'];
            $MSCIT205 = $_POST['MSCIT205'];

            $sql = "INSERT INTO mscit_sem2_result_tbl (MSCIT201,MSCIT202,MSCIT203,MSCIT204,MSCIT205,percentage,total,studentId) VALUES ($MSCIT201,$MSCIT202,$MSCIT203,$MSCIT204,$MSCIT205,$percentage,$total,$studentId)";

            $result = $conn->query($sql);

            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        } else if ($stud_semester  == "3") {
            $MSCIT301 = $_POST['MSCIT301'];
            $MSCIT302 = $_POST['MSCIT302'];
            $MSCIT303 = $_POST['MSCIT303'];
            $MSCIT304 = $_POST['MSCIT304'];
            $MSCIT305 = $_POST['MSCIT305'];
            $MSCIT306 = $_POST['MSCIT306'];

            $sql = "INSERT INTO mscit_sem3_result_tbl (MSCIT301,MSCIT302,MSCIT303,MSCIT304,MSCIT305,MSCIT306,percentage,total,studentId) VALUES ($MSCIT301,$MSCIT302,$MSCIT303,$MSCIT304,$MSCIT305,$MSCIT306,$percentage,$total,$studentId)";
            $result = $conn->query($sql);

            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        } else if ($stud_semester  == "4") {
            $MSCIT401 = $_POST['MSCIT401'];

            $sql = "INSERT INTO mscit_sem4_result_tbl (MSCIT401,percentage,total,studentId) VALUES ($MSCIT401,$percentage,$total,$studentId)";

            $result = $conn->query($sql);

            if ($result) {
                $inserted = true;
            } else {
                $inserted = false;
                echo ''.$conn->error;
            }
        }
    }
}

?>

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
            <div class="col-md-2" style="background-color: #3f5485;  height:100vh;">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-10">

                <div class="row">
                    <div class="col">
                        <?php include '../partial/_nav.php';
                        if ($inserted) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success !</strong> Result added successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
                        }
                        ?>

                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">
                        <h5 class="my-0"> Add Result </h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <div class="form-group row">
                                <label for="studentId" class="col-sm-2 col-form-label">Student Id</label>
                                <div class="col-sm-10">
                                    <input type="text" name="studentId" id="studentId" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="course" class="col-sm-2"></label>
                                <div class="col-sm-10">
                                    <input type="submit" name="show" id="show" value="Show" class="btn btn-sm btn-primary">
                                </div>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['show'])) {

                            $studentId = $_POST['studentId'];
                            $sql = "select * from studentsinfo_tbl where studentId = $studentId";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($rows = $result->fetch_assoc()) {

                        ?>
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                        <input type="hidden" name="id" id="id" value="<?php echo $studentId; ?>">
                                        <div class="form-group row">
                                            <label for="stud_name" class="col-sm-2 col-form-label">Student Name</label>
                                            <div class="col-sm-10">
                                                <input readonly type="text" class="form-control disable" name="stud_name" id="stud_name" value="<?php echo $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stud_course" class="col-sm-2 col-form-label">Course</label>
                                            <div class="col-sm-2">
                                                <?php
                                                $sql = "select * from coursesinfo_tbl";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                    if ($row['cid'] == $rows['course']) {
                                                        $course = $row['cname'];
                                                    }
                                                }
                                                ?>
                                                <input type="text" name="stud_course" class="form-control" id="stud_course" readonly value="<?php echo $course ?>">
                                            </div>
                                            <label for="stud_semester" class="col-sm-2 ml-3 col-form-label">Semester</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="stud_semester" id="stud_semester" value="<?php echo $rows['semester'] ?>" readonly>
                                            </div>
                                        </div>

                                        <?php

                                        if ($course == "BCA") {


                                            if ($rows['semester'] == "1") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Computer Organization</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA101" id="BCA101" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Operating Systems</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA102" id="BCA102" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Introduction to Programming</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA103" id="BCA103" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">HTML Lab</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA104"  id="BCA104" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Mathematical Foundations-I</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA105"  id="BCA105" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Communication Skills</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA106"  id="BCA106" class="form-control">
                                                    </div>
                                                </div>';
                                            } else if ($rows['semester'] == "2") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Object Oriented Programming</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA201"  id="BCA201" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Data Structures and Algorithms</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA202"  id="BCA202" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Database Management Systems</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA203"  id="BCA203" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">SQL</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA204" id="BCA204" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Mathematical Foundation-II</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA205" id="BCA205" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Environmental Science</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA206" id="BCA206" class="form-control">
                                                    </div>
                                                </div>';
                                            } else if ($rows['semester'] == "3") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Shell Programming</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA301" id="BCA301" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Database Application and Programming</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA302" id="BCA302" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Computer Networks-I</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA303" id="BCA303" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Data Exploration</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA304" id="BCA304" class="form-control">
                                                    </div>
                                                </div>';
                                            } else if ($rows['semester'] == "4") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Web Technology</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA401" id="BCA401" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Software Engineering-I</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA402" id="BCA402" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Computer Networks-II</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA403" id="BCA403" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Business Modeling Project</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA404" id="BCA404" class="form-control">
                                                    </div>
                                                </div>';
                                            } else if ($rows['semester'] == "5") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Software Engineering-II</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA501" id="BCA501" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">XML and JSON Technology</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA502" id="BCA502" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Mini Project</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA503" id="BCA503" class="form-control">
                                                    </div>
                                                </div> ';
                                            } else if ($rows['semester'] == "6") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Major Project</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="BCA601" id="BCA601" class="form-control">
                                                    </div>
                                                </div>';
                                            }
                                        } else if ($course == "MSCIT") {
                                            if ($rows['semester'] == "1") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Information Systems & Technologies</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT101" id="MSCIT101" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Software Engineering</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT102" id="MSCIT102" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Digital Communications & Networking</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT103" id="MSCIT103" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Web Technologies</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT104" id="MSCIT104" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Programming in Java</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT105" id="MSCIT105" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Finance and Accounting</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT106" id="MSCIT106" class="form-control">
                                                    </div>
                                                </div>';
                                            } else if ($rows['semester'] == "2") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Networks and Switching</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT201" id="MSCIT201" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Platform Technologies</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT202" id="MSCIT202" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">SMAC (Social Mobile Analytics & Cloud)</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT203" id="MSCIT203" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Introduction to data analysis</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT204" id="MSCIT204" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">E-Commerce</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT205" id="MSCIT205" class="form-control">
                                                    </div>
                                                </div>';
                                            } else if ($rows['semester'] == "3") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">User Experience Design</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT301" id="MSCIT301" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Cyber Security</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT302" id="MSCIT302" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Big Data Systems</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT303" id="MSCIT303" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Internet of Things</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT304" id="MSCIT304" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">IT Project Management</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT305" id="MSCIT305" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Advanced Java</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT306" id="MSCIT306" class="form-control">
                                                    </div>
                                                </div>';
                                            } else if ($rows['semester'] == "4") {
                                                echo '<div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Industrial Project/Major Project (Live)</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="MSCIT401" id="MSCIT401" class="form-control">
                                                    </div>
                                                </div>';
                                            }
                                        }

                                        ?>

                                        <!--?php
                                    $sql = "select * from subjects_tbl where semester=" . $rows['semester'] . " and courseId=" . $rows['course'];
                                    $result1 = $conn->query($sql);
                                    $count = 0;
                                    while ($sub = $result1->fetch_assoc()) {
                                        $count++;
                                        echo  '<div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">' . $sub['subjectname'] . '</label>
                                        <div class="col-sm-6">
                                        <input type="number" name='.$sub['subjectcode'].' id='.$sub['subjectcode'].' class="form-control subjectMarks">
                                        </div>
                                        </div>';
                                    }
                                    echo '<input type="hidden" name="sub_count" id="sub_count" value=' . $count . '>';
                                    ?-->
                                        <div class="form-group row">
                                            <lable class="col-sm-2 col-form-label">Percentage</lable>
                                            <div class="col-sm-2">
                                                <input type="text" name="percentage" id="percentage" readonly class="form-control">
                                            </div>
                                            <lable class="col-sm-1 col-form-label">Total</lable>
                                            <div class="col-sm-2">
                                                <input type="text" name="total" id="total" readonly class="form-control">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="button" id="btnCalculate" value="Calculate" class="btn btn-primary">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <input type="submit" class="btn btn-primary" value="Add Result" name="addResult" id="addResult">
                                            </div>
                                        </div>
                                    </form>
                        <?php
                                }
                            } else {
                                echo '<script> alert("Student not available") </script>';
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../partial/_footer.php'; 
        include 'script.php';
    ?>

    <script>
        document.getElementById("btnCalculate").addEventListener("click", () => {
            sum = 0;
            percentage = 0;
            count = 0;

            course = document.getElementById("stud_course").value;
            semester = document.getElementById("stud_semester").value;
            console.log(course + " " + semester)
            if (course == "BCA") {
                if (semester == "1") {
                    BCA101 = document.getElementById("BCA101").value;
                    BCA102 = document.getElementById("BCA102").value;
                    BCA103 = document.getElementById("BCA103").value;
                    BCA104 = document.getElementById("BCA104").value;
                    BCA105 = document.getElementById("BCA105").value;
                    BCA106 = document.getElementById("BCA106").value;

                    sum = parseInt(BCA101) + parseInt(BCA102) + parseInt(BCA103) + parseInt(BCA104) + parseInt(BCA105) + parseInt(BCA106);
                    percentage = sum * 100 / 600;

                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                } else if (semester == "2") {
                    BCA201 = document.getElementById("BCA201").value;
                    BCA202 = document.getElementById("BCA202").value;
                    BCA203 = document.getElementById("BCA203").value;
                    BCA204 = document.getElementById("BCA204").value;
                    BCA205 = document.getElementById("BCA205").value;
                    BCA206 = document.getElementById("BCA206").value;

                    sum = parseInt(BCA201) + parseInt(BCA202) + parseInt(BCA203) + parseInt(BCA204) + parseInt(BCA205) + parseInt(BCA206);
                    percentage = sum * 100 / 600;
                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                } else if (semester == "3") {
                    BCA301 = document.getElementById("BCA301").value;
                    BCA302 = document.getElementById("BCA302").value;
                    BCA303 = document.getElementById("BCA303").value;
                    BCA304 = document.getElementById("BCA304").value;

                    sum = parseInt(BCA301) + parseInt(BCA302) + parseInt(BCA303) + parseInt(BCA304);
                    percentage = sum * 100 / 400;
                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                } else if (semester == "4") {
                    BCA401 = document.getElementById("BCA401").value;
                    BCA402 = document.getElementById("BCA402").value;
                    BCA403 = document.getElementById("BCA403").value;
                    BCA404 = document.getElementById("BCA404").value;

                    sum = parseInt(BCA401) + parseInt(BCA402) + parseInt(BCA403) + parseInt(BCA404);
                    percentage = sum * 100 / 400;
                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                } else if (semester == "5") {
                    BCA501 = document.getElementById("BCA501").value;
                    BCA502 = document.getElementById("BCA502").value;
                    BCA503 = document.getElementById("BCA503").value;

                    sum = parseInt(BCA501) + parseInt(BCA502) + parseInt(BCA503);
                    percentage = sum * 100 / 300;
                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                } else if (semester == "6") {
                    BCA601 = document.getElementById("BCA601").value;

                    sum = parseInt(BCA601);
                    percentage = sum * 100 / 100;
                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                }
            } else if (course == "MSCIT") {
                if (semester == "1") {
                    MSCIT101 = document.getElementById("MSCIT101").value;
                    MSCIT102 = document.getElementById("MSCIT102").value;
                    MSCIT103 = document.getElementById("MSCIT103").value;
                    MSCIT104 = document.getElementById("MSCIT104").value;
                    MSCIT105 = document.getElementById("MSCIT105").value;
                    MSCIT106 = document.getElementById("MSCIT106").value;

                    sum = parseInt(MSCIT101) + parseInt(MSCIT102) + parseInt(MSCIT103) + parseInt(MSCIT104) + parseInt(MSCIT105) + parseInt(MSCIT106);
                    percentage = sum * 100 / 600;
                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                } else if (semester == "2") {
                    MSCIT201 = document.getElementById("MSCIT201").value;
                    MSCIT202 = document.getElementById("MSCIT202").value;
                    MSCIT203 = document.getElementById("MSCIT203").value;
                    MSCIT204 = document.getElementById("MSCIT204").value;
                    MSCIT205 = document.getElementById("MSCIT205").value;

                    sum = parseInt(MSCIT201) + parseInt(MSCIT202) + parseInt(MSCIT203) + parseInt(MSCIT204) + parseInt(MSCIT205);
                    percentage = sum * 100 / 500;
                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                } else if (semester == "3") {
                    MSCIT301 = document.getElementById("MSCIT301").value;
                    MSCIT302 = document.getElementById("MSCIT302").value;
                    MSCIT303 = document.getElementById("MSCIT303").value;
                    MSCIT304 = document.getElementById("MSCIT304").value;
                    MSCIT305 = document.getElementById("MSCIT305").value;
                    MSCIT306 = document.getElementById("MSCIT306").value;

                    sum = parseInt(MSCIT301) + parseInt(MSCIT302) + parseInt(MSCIT303) + parseInt(MSCIT304) + parseInt(MSCIT305) + parseInt(MSCIT306);
                    percentage = sum * 100 / 600;
                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                } else if (semester == "4") {
                    MSCIT401 = document.getElementById("MSCIT401").value;

                    sum = parseInt(MSCIT401);
                    percentage = sum * 100 / 100;
                    document.getElementById("percentage").value = percentage;
                    document.getElementById("total").value = sum;
                }
            }

        });
    </script>
</body>

</html>