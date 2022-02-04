<?php
include '../partial/_config.php';
session_start();
$inserted = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $adharcard_number = $_POST['adharcard_number'];
    $religion = $_POST['religion'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $semester = $_POST['semester'];
    $course = $_POST['course'];

    if ($password == $cpassword) {
        $sql = "INSERT INTO `studentsinfo_tbl` (`firstname`, `middlename`, `lastname`, `dob`, `emailId`, `mobileno`, `gender`, `religion`, `aadharnumber`, `address`, `password`, `semester`, `course`) VALUES ( '$firstname', '$middlename', '$lastname', '$dob', '$email', '$mobileno', '$gender', '$religion', '$adharcard_number', '$address', '$password', '$semester', '$course')";
        $result = $conn->query($sql);

        if ($result) {
            $inserted = true;
        } else {
            echo "Error :" . $conn->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link.php'; ?>
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
                        <?php include '../partial/_nav.php';
                        if ($inserted) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success !</strong> Student has been added.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
                        }
                        ?>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">
                        <h5> Add Student</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="firstname">First Name </label>
                                        <input type="text" name="firstname" id="firstname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="middlename">Middle Name </label>
                                        <input type="text" name="middlename" id="middlename" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lastname">Last Name </label>
                                        <input type="text" name="lastname" id="lastname" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Gender </label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth </label>
                                        <input type="date" name="dob" id="dob" class="form-control text-dark">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course">Course </label>
                                        <select name="course" class="form-control" id="course">
                                            <option selected disabled>Select Course</option>
                                            <?php
                                            $sql = "SELECT * FROM `coursesinfo_tbl`";
                                            $result = $conn->query($sql);
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '<option value=' . $rows['cid'] . '>' . $rows['cname'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="semester">Semester </label>
                                        <select name="semester" class="form-control" id="semester">
                                            <option selected disabled>Select Semester</option>

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email </label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobileno">Mobile No </label>
                                        <input type="number" name="mobileno" id="mobileno" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="adharcard_number">Adhar Card Number </label>
                                        <input type="text" name="adharcard_number" id="adharcard_number" maxlength="12" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <input type="text" name="religion" id="religion" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" name="cpassword" id="cpassword" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="address" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" name="submit" id="submit" value="Add Student" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
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