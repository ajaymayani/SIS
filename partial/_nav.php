

    <div class=" row text-center" style="background-color: #3f5485; height:56px;">
        <div class="col">
            <nav class="navbar navbar-expand-lg" style="background-color: #3f5485; height:50px;">
                <a class="navbar-brand" href="index.php">
                    <?php if (isset($_SESSION['username']))  echo '<img style="background-color: white;" class="img" src="../images/MSUB_Logo.png" alt="logo" height="50px">';
                    else echo '<img style="background-color: white;" class="img" src="images/MSUB_Logo.png" alt="logo" height="50px">'; ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600"> <?php if (isset($_SESSION['username'])) {
                                                                                            echo $_SESSION['username'];
                                                                                            echo '<img class="img-profile rounded-circle ml-2" src="../images/user.png" height="35px">';
                                                                                        } else {
                                                                                            echo $_SESSION['susername'];
                                                                                            echo '<img class="img-profile rounded-circle ml-2" src="images/user.png" height="35px">';
                                                                                        } ?> </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href=" <?php if (isset($_SESSION['username']))  echo '/clg/Assignment/SIS/admin/logout.php';
                                                                    else echo '/clg/Assignment/SIS/logout.php'; ?>" style="color: white;">
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


  