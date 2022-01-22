<?php
include '../partial/_config.php';
$showError = false;

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header("location:index.php");
    } else {
        $showError = "Invalid credential";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <style>
        #login-right {
            position: absolute;
            right: 0;
            width: 40%;
            height: calc(100%);
            background: white;
            display: flex;
            align-items: center;
        }

        #login-left {
            position: absolute;
            left: 0;
            width: 60%;
            height: calc(100%);
            background: #00000061;
            display: flex;
            align-items: center;
        }

        #login-right .card {
            margin: auto
        }

        .logo {
            margin: auto;
            font-size: 8rem;
            background: white;
            padding: .5em 0.8em;
            border-radius: 50% 50%;
            color: #000000b3;
        }

        #login-left {
            background: url('../images/h.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>

    <?php
    if ($showError) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error !</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    ?>

    <main id="main" class=" alert-info">
        <div id="login-left">
            <!-- == You can logo or image herre == -->
            <!-- <div class="logo">
  				<i class="fa fa-poll-h"></i>
  			</div> -->
        </div>
        <div id="login-right">
            <div class="card col-md-8">
                <div class="card-body">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary" name="login">Login</button></center>
                    </form>
                </div>
            </div>
        </div>


    </main>
    <script src="../bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
