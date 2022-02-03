<?php
include 'partial/_config.php';

session_start();
if (!isset($_SESSION['sloggedin']) || $_SESSION['sloggedin'] != true) {
    header("location:login.php");
}
$loggedin = false;

if (isset($_SESSION['sloggedin']) && $_SESSION['sloggedin'] == true) {
    $loggedin = true;
    $username = $_SESSION['susername'];
}
?>

<html>

<head>
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="fontawesome-free-5.6.3-web/icon.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

    <style>
        ul li a {
            color: white;
            text-align: left;
        }

        ul li a:hover {
            background-color: #354052;
            color: #1ABC9C !important;

        }

        .border-left-primary {
            border-left: 0.25rem solid #4e73df !important;
        }

        .border-left-success {
            border-left: 0.25rem solid #1cc88a !important;
        }

        .border-left-info {
            border-left: 0.25rem solid #36b9cc !important;
        }

        .border-left-warning {
            border-left: 0.25rem solid #f6c23e !important;
        }

    </style>

</head>

<body>
    <div>
        <div class="row">
            <div class="col-md-2" style="background-color: #3f5485; width:100vw; height:100vh">
                <?php include 'sidebar.php'; ?>
            </div>

            <div class="col-md-10"">

            <?php include 'partial/_nav.php'; ?>
        
            <div class=" card mt-3">
                <div class="card-header">
                    <h5>Dashboard</h2>
                </div>
                <div class="card-body">
                    <!-- Content Row -->
                    <div class="row mr-2">

                        <?php
                        $sql = "select course from studentsinfo_tbl where studentId = " . $_SESSION['studentId'];
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $course = $row['course'];

                            if ($course == "1") {
                                echo '<h6 class="ml-3">Programme Name : Bachelor of Computer Application</h6>';
                            } else {
                                echo '<h6 class="ml-3">Programme Name : Master of Science</h6>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    <?php include 'partial/_footer.php'; ?>

    <script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>