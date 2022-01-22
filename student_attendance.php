<?php
include 'partial/_config.php';
session_start();

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
                        <strong>Show Attendance</strong>
                    </div>
                    <div class="card-body">
                        <?php


                        $course = $_SESSION['course'];
                        $semester = $_SESSION['semester'];

                        $sql = "select * from attendance where studentId = " . $_SESSION['studentId'];
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo '<table id="myTable" class="table"> <thead>
                                        <th>Sno</th>
                                        <th>Date</th>
                                        <th>Attendance Status</th>
                                        </thead>';
                            $sno = 0;
                            while ($rows = $result->fetch_assoc()) {
                                $sno++;
                                echo '<tr>
                                                <td>' . $sno . '</td>
                                                <td>' . $rows['aDate'] . '</td>';

                                if ($rows['ap'] == "A") {
                                    echo '<td><span class="badge badge-danger">Apsent</span></td></tr>';
                                } else {
                                    echo '<td><span class="badge badge-success">Present</span></td></tr>';
                                }
                            }
                            echo '</table>';
                        } else {
                            echo "attendance not available " . $conn->error;
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include '../partial/_footer.php'; ?>

    <script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>