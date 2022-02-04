<?php
include '../partial/_config.php';
$inserted = false;
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
}
if (isset($_POST['addAttendance']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $studentId = $_POST['id'];
    $aDate = $_POST['aDate'];
    $ap = $_POST['ap'];

    $sql = "insert into attendance (studentId,aDate,ap) values ('$studentId','$aDate','$ap')";
    $result = $conn->query($sql);

    if ($result) {
        $inserted = true;
    } else {
        $inserted = false;
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

                        if ($inserted) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success !</strong> Attendance added successfully.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
                        }

                        ?>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h5 class="my-0">Attendance</h5>
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

                                        <div class="form-group row">
                                            <label for="aDate" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-3">
                                                <input class="form-control" type="date" name="aDate" id="aDate">
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
                                                <input type="submit" class="btn btn-primary" value="Add Attendance" name="addAttendance" id="addAttendance">
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
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>