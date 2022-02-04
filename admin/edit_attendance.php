<?php
include '../partial/_config.php';
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
}
if ($_SERVER['REQUEST_METHOD'] == "GET") {


    $attendanceId = $_GET['id'];
    $studentId = $_GET['studentId'];

    $sql = "SELECT * FROM attendance where id = $attendanceId";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $id = $rows['id'];
                $studentId = $rows['studentId'];
                $aDate = $rows['aDate'];
                $ap = $rows['ap'];

                $student_sql = "select * from studentsinfo_tbl where studentId = $studentId";
                $result1 = $conn->query($student_sql);
                if ($result1->num_rows > 0) {
                    while ($rows1 = $result1->fetch_assoc()) {
                        $studentname = $rows1['firstname'] . ' ' . $rows1['middlename'] . ' ' . $rows1['lastname'];
                        if ($rows1['course'] == "1") {
                            $studentcourse = "BCA";
                        } else {
                            $studentcourse = "MSCIT";
                        }
                        $studentsem = $rows1['semester'];
                    }
                } else {
                    echo $conn->error;
                }
            }
        } else {
            echo "no student data available";
        }
    } else {
        echo "Error : " . $conn->error;
    }
}


if (isset($_POST['updateAttendance']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    echo "sdfsdf";
    $aId = $_POST['aId'];
    $studentId = $_POST['studentId'];
    $aDate = $_POST['aDate'];
    $ap = $_POST['ap'];

    $sql = "UPDATE `attendance` SET`studentId`='$studentId',`aDate`='$aDate',`ap`='$ap' WHERE `id` = '$aId'";
    $result = $conn->query($sql);

echo $sql;
    if ($result) {
        header("location:show_student_attendance.php");
    } else {
        echo "Error ".$conn->error;
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
    
    <style>
        .radio-toolbar {
            margin: 10px;
        }

        .radio-toolbar input[type="radio"] {
            opacity: 0;
            position: fixed;
            width: 0;
        }

        .radio-toolbar label {
            display: inline-block;
            background-color: #ddd;
            padding: 10px 20px;
            font-family: sans-serif, Arial;
            font-size: 16px;
            border: 2px solid #444;
            border-radius: 4px;
        }

        .radio-toolbar label:hover {
            background-color: #dfd;
        }

        .radio-toolbar input[type="radio"]:focus+label {
            border: 2px dashed #444;
        }

        .radio-toolbar input[type="radio"]:checked+label {
            background-color: #bfb;
            border-color: #4c4;
        }
    </style>
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
                        <?php include '../partial/_nav.php';

                        ?>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <strong>Attendance</strong>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <div class="form-group row">
                                <label for="studentId" class="col-sm-2 col-form-label">Student Id</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="studentId" id="studentId" class="form-control" value="<?php echo $studentId; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stud_name" class="col-sm-2 col-form-label">Student Name</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="aId" id="aId" value="<?php echo $attendanceId; ?>">
                                    <input readonly type="text" class="form-control disable" name="stud_name" id="stud_name" value="<?php echo $studentname; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stud_course" class="col-sm-2 col-form-label">Course</label>
                                <div class="col-sm-2">

                                    <input type="text" name="stud_course" class="form-control" id="stud_course" readonly value="<?php echo $studentcourse; ?>">
                                </div>
                                <label for="stud_semester" class="col-sm-2 ml-3 col-form-label">Semester</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="stud_semester" id="stud_semester" value="<?php echo $studentsem ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="aDate" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="date" name="aDate" id="aDate" value="<?php echo $aDate; ?>">
                                </div>
                                <label for="attendance" class="col-sm-2 col-form-label">Attendance</label>
                                <div class="col-sm-2 col-form-label">

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="present" name="ap" class="custom-control-input" value="P">
                                        <label class="custom-control-label" for="present">P</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="apsent" name="ap" class="custom-control-input" value="A">
                                        <label class="custom-control-label" for="apsent">A</label>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <input type="submit" class="btn btn-primary" value="Update Attendance" name="updateAttendance" id="updateAttendance">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include '../partial/_footer.php'; 
        include 'script.php';
    ?>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>