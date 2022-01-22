<html>

<head>
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>

    <div class=" row text-center" style="background-color: #3f5485; height:56px;">
        <div class="col">
            <nav class="navbar navbar-expand-lg" style="background-color: #3f5485; height:50px;">
                <a class="navbar-brand" href="index.php">
                    <img style="background-color: white;" class="img" src="https://msuis.msubaroda.ac.in/Vidhyarthi/assets/images/MSUB_Logo.png" alt="logo" height="50px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600"> <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; else echo $_SESSION['susername'];  ?> </span>
                                <img class="img-profile rounded-circle" src="https://admission.msubaroda.ac.in//applicant/assets/images/user.png" height="35px">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=" <?php if (isset($_SESSION['username']))  echo '/clg/Assignment/SIS/admin/logout.php'; else echo '/clg/Assignment/SIS/logout.php'; ?>" style="color: white;">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <script src="../bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>