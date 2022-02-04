<?php
include '../partial/_config.php';

$bca_sql = "select * from studentsinfo_tbl where course = 1";
$bca_result = $conn->query($bca_sql);
$bca_student = $bca_result->num_rows;


$msc_sql = "select * from studentsinfo_tbl where course = 2";
$msc_result = $conn->query($msc_sql);
$msc_student =  $msc_result->num_rows;


session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
}
$loggedin = false;

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
    $username = $_SESSION['username'];
}
?>

<html>

<head>
    <!-- <script src="../fontawesome-free-5.6.3-web/icon.js" crossorigin="anonymous"></script> -->

    <?php include 'link.php';?>
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


        h6 {
            font-weight: 600;
            font-size: 1rem;
            text-transform: uppercase;
            display: inline-block;
            letter-spacing: 1px;
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

            <?php include '../partial/_nav.php'; ?>
        
            <div class=" card mt-3">
                <div class="card-header">
                    <h5 class="my-0"> Add Students</h5>
                </div>
                <div class="card-body">
                    <!-- Content Row -->
                    <div class="row mr-2">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <h6>BCA Stundets</h6>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $bca_student; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x mr-1"></i>
                                        </div>
                                        <a href="show_all_students.php?course=1" class="small-box-footer mt-2">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6>Msc-IT Students</h6>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $msc_student; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x mr-1"></i>
                                        </div>
                                        <div class="col-auto mt-2">
                                            <a href="show_all_students.php?course=2" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>

    </div>
    <?php include '../partial/_footer.php'; 
        include 'script.php';
    ?>
</body>

</html>