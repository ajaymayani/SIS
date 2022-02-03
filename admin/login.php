<?php
include '../partial/_config.php';
$showError = false;

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        while ($row = $result->fetch_assoc()) {

            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;

                header("location:index.php");
            } else {
                $showError = "Incorrect password";
            }
        }
    } else {
        $showError = "Invalid username";
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
    <link rel="stylesheet" href="css/style.css">

    <style>
        section {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        section .content-box {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            border-radius: 5px;
            width: 35%;
            height: 60%;
        }

        section .content-box .form-box {
            width: 70%;
        }

        .alert {
            width: 100%;
            padding: 10px 20px;
            outline: none;
            font-weight: 400;
            font-size: 16px;
            letter-spacing: 1px;
            margin: 0px;
        }
    </style>
</head>

<body>

    <!-- <?php
            if ($showError) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error !</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
            }
            ?>-->
    <!-- 
    <div id="main" class=" alert-info">
        <div id="login-left">
            
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
    </div> -->


    <section>
        <div class="content-box">
            <div class="form-box">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <div class="input-box">
                        <input type="text" id="username" name="username" placeholder="Usename" required>

                    </div>
                    <div class="input-box">
                        <input type="password" id="password" name="password" placeholder="Password" required>

                    </div>
                    <div class="input-box">
                        <input type="submit" name="login" id="login" value="Login">
                    </div>
                    <div class="input-box">
                        <?php
                        if ($showError) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error !</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
                        }
                        ?>
                    </div>
            </div>
            </form>
        </div>
        </div>
    </section>

    <script src="../bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>