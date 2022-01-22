<?php

include 'partial/_config.php';

$showError = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $studentId = $_POST['studentId'];
  $password = $_POST['password'];

  $sql = "select * from studentsinfo_tbl where studentId = $studentId and password = $password";
  $result = $conn->query($sql);
  if ($result) {

    if ($result->num_rows > 0) {
      
      while($row = $result->fetch_assoc())
      {
        session_start();
        $_SESSION['sloggedin'] = true;
        $_SESSION['studentId'] =$row['studentId']; 
        $_SESSION['susername'] = $row['firstname'];
        $_SESSION['course'] =$row['course']; 
        $_SESSION['semester'] = $row['semester'];
        $_SESSION['name'] = $row['firstname'].' '.$row['middlename'].' '.$row['lastname'];
        
        header("location:index.php");
      }

    } else {
      $showError = "Invalid credential";
      echo "" . $conn->error;
    }
  } else {
    $showError = "Something went to wrong";
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap/css/style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="fontawesome-free-5.6.3-web/icon.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div id="login-form-wrap">
    <div>
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
    <h2>Login</h2>
    <form id="login-form" method="POST" action="login.php">
      <p>
        <input type="text" id="studentId" name="studentId" placeholder="Student Id" required>
      </p>
      <p>
        <input type="password" id="password" name="password" placeholder="Password" required>
      </p>
      <p>
        <input type="submit" name="login" id="login" value="Login">
      </p>
    </form>
    <div id="create-account-wrap">
      <p>Forget Password ? <a href="forget_password.php">click</a>
      <p>
    </div>
  </div>
  <script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>