<?php
include '../partial/_config.php';
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link.php'; ?>
    <link href="jq/assets/plugins/datatables/export/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="jq/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <style>
        .red {
            color: red;
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
                        <h5 class="my-0">Show Result</h5>
                    </div>
                    <div class="card-body">


                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="course">Course </label>
                                        <select name="course" class="form-control" id="course">
                                            <option selected disabled>Select Course</option>
                                            <?php
                                            $sql = "SELECT * FROM `coursesinfo_tbl`";
                                            $result = $conn->query($sql);
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '<option value=' . $rows['cid'] . '>' . $rows['cname'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="semester">Semester </label>
                                        <select name="semester" class="form-control" id="semester">
                                            <option selected disabled>Select Semester</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" style="margin-top: 35px;">
                                        <input type="submit" name="show" id="show" value="Show" class="btn btn-sm btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['show'])) {

                            $course = $_POST['course'];
                            $semester = $_POST['semester'];

                            if ($course == "1") {
                                if ($semester == "1") {
                                    $sql = "select * from bca_sem1_result_tbl r,studentsinfo_tbl s where r.studentId = s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                        <th>Sno</th>
                                        <th>Name</th>
                                        <th>BCA101</th>
                                        <th>BCA102</th>
                                        <th>BCA103</th>
                                        <th>BCA104</th>
                                        <th>BCA105</th>
                                        <th>BCA106</th>
                                        <th>Percentage</th>
                                        <th>Total</th>
                                        </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 9) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';

                                            // echo '<tr>
                                            //     <td>' . $sno . '</td>
                                            //     <td>'.$rows['firstname'].' ' .$rows['middlename'].' ' .$rows['lastname'].'</td>';
                                            //     if($rows['BCA101']<25){
                                            //         echo  '<td class="red">' . $rows['BCA101'] . '</td>';
                                            //     }else{
                                            //         echo  '<td>' . $rows['BCA101'] . '</td>';
                                            //     }
                                            //     echo '
                                            //     <td>' . $rows['BCA102'] . '</td>
                                            //     <td>' . $rows['BCA103'] . '</td>
                                            //     <td>' . $rows['BCA104'] . '</td>
                                            //     <td>' . $rows['BCA105'] . '</td>
                                            //     <td>' . $rows['BCA106'] . '</td>
                                            //     <td>' . $rows['percentage'] . '</td>
                                            //     <td>' . $rows['total'] . '</td></tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                } else if ($semester == "2") {
                                    $sql = "select * from bca_sem2_result_tbl r,studentsinfo_tbl s where r.studentId= s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                        <th>Sno</th>
                                        <th>Name</th>
                                        <th>BCA201</th>
                                        <th>BCA202</th>
                                        <th>BCA203</th>
                                        <th>BCA204</th>
                                        <th>BCA205</th>
                                        <th>BCA206</th>
                                        <th>Percentage</th>
                                        <th>Total</th>
                                        </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 9) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                } else if ($semester == "3") {
                                    $sql = "select * from bca_sem3_result_tbl r, studentsinfo_tbl s where r.studentId = s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>BCA301</th>
                                    <th>BCA302</th>
                                    <th>BCA303</th>
                                    <th>BCA304</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 7) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';   
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                } else if ($semester == "4") {
                                    $sql = "select * from bca_sem4_result_tbl r , studentsinfo_tbl s where r.studentId =  s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>BCA401</th>
                                    <th>BCA402</th>
                                    <th>BCA403</th>
                                    <th>BCA404</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 7) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                } else if ($semester == "5") {
                                    $sql = "select * from bca_sem5_result_tbl r,studentsinfo_tbl s where r.studentId = s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>BCA501</th>
                                    <th>BCA502</th>
                                    <th>BCA503</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 6) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                } else if ($semester == "6") {
                                    $sql = "select * from bca_sem6_result_tbl r,studentsinfo_tbl s where r.studentId = s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>BCA601</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 4) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                }
                            } else {
                                if ($semester == "1") {
                                    $sql = "select * from mscit_sem1_result_tbl r,studentsinfo_tbl s where r.studentId= s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>MSCIT101</th>
                                    <th>MSCIT102</th>
                                    <th>MSCIT103</th>
                                    <th>MSCIT104</th>
                                    <th>MSCIT105</th>
                                    <th>MSCIT106</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 9) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                } else if ($semester == "2") {
                                    $sql = "select * from mscit_sem2_result_tbl r , studentsinfo_tbl s where r.studentId = s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>MSCIT201</th>
                                    <th>MSCIT202</th>
                                    <th>MSCIT203</th>
                                    <th>MSCIT204</th>
                                    <th>MSCIT205</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 8) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                } else if ($semester == "3") {
                                    $sql = "select * from mscit_sem3_result_tbl r,studentsinfo_tbl s where r.studentId = s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>MSCIT301</th>
                                    <th>MSCIT302</th>
                                    <th>MSCIT303</th>
                                    <th>MSCIT304</th>
                                    <th>MSCIT305</th>
                                    <th>MSCIT306</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 9) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                } else if ($semester == "4") {
                                    $sql = "select * from mscit_sem4_result_tbl r,studentsinfo_tbl s where r.studentId = s.studentId";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>MSCIT401</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                        $sno = 0;
                                        while ($rows = $result->fetch_assoc()) {
                                            $sno++;
                                            echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>
                                             <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>';
                                            foreach ($rows as $key => $value) {

                                                if ($i > 0 && $i < 4) {
                                                    if ($value < 25)
                                                        echo '<td class="red">' . $value . '</td>';
                                                    else
                                                        echo '<td>' . $value . '</td>';
                                                }
                                                $i++;
                                            }
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo "result not available " . $conn->error;
                                    }
                                } else {
                                    echo '<script>alert("Please select semester 1 to 4")</script>';
                                }
                            }
                        }

                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include '../partial/_footer.php';
    include 'script.php';
    ?>

    <script src="jq/assets/plugins/datatables/export/dataTables.buttons.min.js"></script>
    <script src="jq/assets/plugins/datatables/export/pdfmake.min.js"></script>
    <script src="jq/assets/plugins/datatables/export/vfs_fonts.js"></script>
    <script src="jq/assets/plugins/datatables/export/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'pdf'
                ]
            });
        });

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                sno = e.target.id;
                if (confirm("Are you sure you want to delete this student..!")) {

                    window.location = `delete_student.php?id=${sno}`;
                }
            })
        })
    </script>
</body>

</html>