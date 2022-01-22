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
                        <?php 
                        
                        session_start();
                        include '../partial/_nav.php';
                        ?>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <strong>All Students</strong>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>Id</th>
                                <th>Student Id</th>
                                <th>Student Name</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>

                                <?php

                                include '../partial/_config.php';

                                $sql = "SELECT a.id,s.studentId,a.aDate,s.studentId,s.firstname,s.middlename,s.lastname FROM attendance a,studentsinfo_tbl s where a.studentId=s.studentId";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($rows = $result->fetch_assoc()) {
                                        echo '<tr>
                                        <td>' . $rows['id'] . ' </td>
                                        <td>' . $rows['studentId'] . ' </td>
                                        <td>' . $rows['firstname'] . ' ' .$rows['middlename'] . ' '. $rows['lastname'] . ' </td>
                                        <td>' .$rows['aDate'].' </td>
                    <td> <a href="edit_attendance.php?id=' . $rows['id'] . '&studentId='.$rows['studentId'].'" class="btn edit btn-primary btn-sm">Edit</a> <button  id="' . $rows['id'] . '" class="delete btn btn-danger btn-sm">Delete</button></td>

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




    <?php include'../partial/_footer.php'; ?>


    <script src="../bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                sno = e.target.id;
                if (confirm("Are you sure you want to delete this student attendance..?")) {
                    window.location = `delete_attendance.php?id=${sno}`;
                }
            })
        })
    </script>
</body>

</html>