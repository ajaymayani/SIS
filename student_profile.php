<?php
session_start();
include 'partial/_config.php';
$sql = "select * from studentsinfo_tbl where studentId = ".$_SESSION['studentId'];
$result = $conn->query($sql);

if($result)
{
    while($rows = $result->fetch_assoc())
    {
        $firstname = $rows['firstname'];
        $middlename = $rows['middlename'];
        $lastname = $rows['lastname'];
        $dob = $rows['dob'];
        $gender = $rows['gender'];
        $emailId = $rows['emailId'];
        $mobileno = $rows['mobileno'];
        $religion = $rows['religion'];
        $aadharnumber = $rows['aadharnumber'];
        $address = $rows['address'];
        $password = $rows['password'];
        $course = $rows['course'];
        $semester = $rows['semester'];
    }
}else{
    echo "Error :".$conn->error;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">


    <title>Student Profile</title>
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
                        <?php include 'partial/_nav.php'; ?>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>Student Profile</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="firstname">First Name </label>
                                        <input type="text" readonly name="firstname" id="firstname" value="<?php echo $firstname; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="middlename">Middle Name </label>
                                        <input type="text" readonly name="middlename" id="middlename" class="form-control" value="<?php echo $middlename; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lastname">Last Name </label>
                                        <input type="text" readonly name="lastname" id="lastname" class="form-control" value="<?php echo $lastname; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Gender </label>
                                        <input type="text" readonly name="gender" id="gender" class="form-control" value="<?php echo $gender; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth </label>
                                        <input type="date" name="dob" id="dob" class="form-control text-dark" value="<?php echo $dob; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course">Course </label>
                                        <?php
                                            if($course=="1")
                                            {
                                                $stud_course = "BCA";
                                            }else{
                                                $stud_course = "MSCIT";
                                            }
                                        ?>
                                        <input type="text" name="course" id="course" class="form-control" value="<?php echo $stud_course; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="semester">Semester </label>
                                        <input type="text" name="course" id="course" class="form-control" value="<?php echo $semester; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email </label>
                                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $emailId; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobileno">Mobile No </label>
                                        <input type="number" name="mobileno" id="mobileno" class="form-control" readonly value="<?php echo $mobileno; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="adharcard_number">Adhar Card Number </label>
                                        <input type="text" name="adharcard_number" id="adharcard_number" maxlength="12" class="form-control" value="<?php echo $aadharnumber; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <input type="text" name="religion" id="religion" class="form-control" value="<?php echo $religion; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" name="password" id="password" class="form-control" value="<?php echo $password; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="address" class="form-control" readonly><?php echo $address; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>