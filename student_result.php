<?php
include 'partial/_config.php';
session_start();
if (!isset($_SESSION['sloggedin']) || $_SESSION['sloggedin'] != true) {
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
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="admin/jq/assets/plugins/datatables/export/buttons.dataTables.min.css">
    <link rel="stylesheet" href="admin/jq/assets/css/plugins.min.css">

    <style>
        .red {
            color :red;
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
                        <?php include 'partial/_nav.php';
                        ?>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h5>Show Result</h5>
                    </div>
                    <div class="card-body">
                        <?php
    

                            $course = $_SESSION['course'];
                            $semester = $_SESSION['semester'];

                            if ($course == "1") {
                                if ($semester == "1") {
                                    $sql = "select * from bca_sem1_result_tbl where studentId = ".$_SESSION['studentId'];
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                        <th>Sno</th>
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
                                            echo '<td>' . $sno . '</td>';

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
                                    $sql = "select * from bca_sem2_result_tbl where studentId = ".$_SESSION['studentId'];
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<table id="myTable" class="table"> <thead>
                                        <th>Sno</th>
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
                                            $sno++;echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>';

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
                                }
                             else if ($semester == "3") {
                                $sql = "select * from bca_sem3_result_tbl where studentId = ".$_SESSION['studentId'];
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>BCA301</th>
                                    <th>BCA302</th>
                                    <th>BCA303</th>
                                    <th>BCA304</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                    $sno = 0;
                                    while ($rows = $result->fetch_assoc()) {
                                        $sno++;echo '<tr>';
                                        $i = 0;
                                        echo '<td>' . $sno . '</td>';

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
                                $sql = "select * from bca_sem4_result_tbl where studentId = ".$_SESSION['studentId'];
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
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
                                            echo '<td>' . $sno . '</td>';

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
                                $sql = "select * from bca_sem5_result_tbl where studentId = ".$_SESSION['studentId'];
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>BCA501</th>
                                    <th>BCA502</th>
                                    <th>BCA503</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                    $sno = 0;
                                    while ($rows = $result->fetch_assoc()) {
                                        $sno++;
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>';

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
                                $sql = "select * from bca_sem6_result_tbl where studentId = ".$_SESSION['studentId'];
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>BCA601</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                    $sno = 0;
                                    while ($rows = $result->fetch_assoc()) {
                                        $sno++;
                                        echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>';

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
                        }else{
                            if ($semester == "1") {
                                $sql = "select * from mscit_sem1_result_tbl where studentId = ".$_SESSION['studentId'];
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
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
                                            echo '<td>' . $sno . '</td>';

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
                            }else if ($semester == "2") {
                                $sql = "select * from mscit_sem2_result_tbl where studentId = ".$_SESSION['studentId'];
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
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
                                            echo '<td>' . $sno . '</td>';

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
                            }else if ($semester == "3") {
                                $sql = "select * from mscit_sem3_result_tbl where studentId = ".$_SESSION['studentId'];
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
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
                                            echo '<td>' . $sno . '</td>';

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
                            }else if ($semester == "4") {
                                $sql = "select * from mscit_sem4_result_tbl where studentId = ".$_SESSION['studentId'];
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<table id="myTable" class="table"> <thead>
                                    <th>Sno</th>
                                    <th>MSCIT401</th>
                                    <th>Percentage</th>
                                    <th>Total</th>
                                    </thead>';
                                    $sno = 0;
                                    while ($rows = $result->fetch_assoc()) {
                                        $sno++;
                                        echo '<tr>';
                                            $i = 0;
                                            echo '<td>' . $sno . '</td>';

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
                            }else{
                                echo '<script>alert("Please select semester 1 to 4")</script>';
                            }
                        }
                    

                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include 'partial/_footer.php'; ?>

    <script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script src="admin/jq/assets/plugins/datatables/export/dataTables.buttons.min.js"></script>
    <script src="admin/jq/assets/plugins/datatables/export/pdfmake.min.js"></script>
    <script src="admin/jq/assets/plugins/datatables/export/vfs_fonts.js"></script>
    <script src="admin/jq/assets/plugins/datatables/export/buttons.html5.min.js"></script>
 

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'pdf'
                ]

            });
        });
    </script>
</body>

</html>