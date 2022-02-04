<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include 'link.php';?>

    <link href="jq/assets/plugins/datatables/export/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="jq/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
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

                        session_start();
                        include '../partial/_nav.php';
                        ?>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h5 class="my-0">All Students</h5>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>Sno</th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email ID</th>
                                <th>Course</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>

                                <?php

                                include '../partial/_config.php';

                                if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['course'])) {
                                    $course = $_GET['course'];

                                    $sql = "SELECT * FROM studentsinfo_tbl WHERE course = $course";
                                } else {
                                    $sql = "SELECT * FROM studentsinfo_tbl s ,coursesinfo_tbl c where s.course=c.cid";
                                }


                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $sno = 0;
                                    while ($rows = $result->fetch_assoc()) {

                                        if ($rows['course'] == "1") {
                                            $stud_course = "BCA";
                                        } else {
                                            $stud_course = "MSCIT";
                                        }

                                        echo '<tr>
                                        <td>' . ++$sno . '</td>
                    <td>' . $rows['studentId'] . ' </td>
                    <td>' . $rows['firstname'] . ' ' . $rows['middlename'] . ' ' . $rows['lastname'] . '</td>
                    <td>' . $rows['gender'] . '</td>
                    <td>' . $rows['emailId'] . '</td>
                    <td>' . $stud_course . '</td>
                    <td> <a href="edit.php?id=' . $rows['studentId'] . '" class="btn btn-success btn-sm">Edit</a> <button  id="' . $rows['studentId'] . '" class="delete btn btn-danger btn-sm">Delete</button></td>

                    </tr>';
                                    }
                                } else {
                                    echo "no data available";
                                }
                                ?>
                            </tbody>
                        </table>
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