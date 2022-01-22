<html>

<head>
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d89d19708a.js" crossorigin="anonymous"></script>
    <style>
        ul li a {
            color: white;
        }

        ul li a:hover {
            background-color: #354052;
            color: #1ABC9C !important;

        }

        .navbar-nav>li>.dropdown-menu {
            background-color: #3f5485;
        }

        .navbar-nav>li>.dropdown-menu :hover {
            background-color: #354052;
            color: #1ABC9C !important;
        }
    </style>

</head>

<body>
    <div class="row text-center" style="background-color: #3f5485; height:50px;">
        <div class="col">
            <h3 class="text-center mt-2" style="color: white;">SI System</h3>
            <hr style="background-color:white">
        </div>
    </div>

    <ul class="navbar-nav ml-4" style="margin-top: 23px;">
        <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fa fa-dashboard mr-2"></i>Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="add_student.php"><i class="fas fa-user-graduate mr-2"></i>Add Student</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="show_all_students.php"><i class="fa fa-users mr-1"></i>Show Student</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-poll mr-2"></i>Result
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="add_result.php" style="color:white">Add Result</a>
                <a class="dropdown-item" href="show_results.php" style="color:white">Show Result</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-calendar-alt mr-2"></i>Attendance
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="add_attendance.php" style="color:white">Add Attendance</a>
                <a class="dropdown-item" href="show_student_attendance.php" style="color:white">Show Attendance</a>
            </div>
        </li>

    </ul>
    <script src="../bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>