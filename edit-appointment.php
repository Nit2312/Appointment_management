<?php
session_start();
include 'partials/_dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pid = $_POST['pid'];
    $pname = $_POST['name'];
    $dname = $_POST['dname'];
    $dept = $_POST['dept'];
    $number = $_POST['number'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $time = $_POST['time'];

    if (empty($pname)) {
        echo '<script> alert("Plz enter Patient name");document.myform.name.focus()</script>';
    } else if (!preg_match("/^[a-zA-Z\s]*$/", $pname)) {
        echo "Plz enter characters only";
    }
    if (empty($dname)) {
        echo '<script> alert("Plz enter doctor name");document.myform.dname.focus()</script>';
    } else if (!preg_match("/^[a-zA-Z\s]*$/", $dname)) {
        echo "Plz enter characters only";
    } else if (empty($number)) {
        echo '<script>
            alert("Plz enter phone number");
            document.myform.number.focus()
        </script>';
    } else if (strlen($number) != 10) {
        echo '<script>
            alert("Plz enter valid phone number");
            document.myform.number.focus()
        </script>';
    } else if (empty($date)) {
        echo '<script>
            alert("Plz Select Appointment Date");
            document.myform.date.focus()
        </script>';
    } else if (empty($time)) {
        echo '<script>
            alert("Plz Enter Appointment Time");
            document.myform.time.focus()
        </script>';
    } else if (empty($dept)) {
        echo '<script>
            alert("Plz Select Service");
            document.myform.service.focus()
        </script>';
    } else {
        $sql = "UPDATE `appointment` SET `dname`='$dname',`dept`='$dept',`pname`='$pname',`phnumber`='$number',`date`='$date',`time`='$time' WHERE `appointment`.`pid` = $pid;";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "error" . mysqli_error($conn);
        } else {
            echo '<script>
        alert("Successfull! Your appointment has been booked succesfully")
    </script>';
        }
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<!-- edit-appointment24:07-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <?php
        include 'partials/_header.php';
        ?>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <?php
                    include ("partials/_navbar.php");
                    ?>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Appointment</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Id</label>
                                        <?php
                                        include ("partials/_pid.php");
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Name</label>
                                        <div class="person-icon">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <?php
                                        include ("partials/_dept.php");
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Doctor</label>
                                        <?php
                                        include ("partials/_dname.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="datetimepicker3" name="time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Email</label>
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Phone Number</label>
                                        <input class="form-control" type="text" name="number">
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <input type="submit" value="Submit" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'

            });
        });
    </script>
</body>


<!-- edit-appointment24:07-->

</html>