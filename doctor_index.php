<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
    exit;
}

include ("partials/_dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index-2.php" class="logo">
                    <img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">

                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="settings.php">Settings</a>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </div>
        </div>
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
                <?php
                include ("partials/_sidebar.php");
                ?>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline-block mb-0">Upcoming Appointments</h4> <a
                                    href="appointments.php" class="btn btn-primary float-right">View all</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table mt-0">
                                        <thead>
                                            <tr>
                                                <th>Patient name</th>
                                                <th>Patient age</th>
                                                <th>Patient Phone number</th>
                                                <th>Doctor name</th>
                                                <th>Department</th>
                                                <th>Appointment time</th>
                                            </tr>
                                        </thead>
                                        <tbody class="mt-0">
                                            <?php
                                            $dname = $_SESSION['dname'];
                                            $sql = "SELECT * FROM `appointment` where `dname` = '$dname';";
                                            $result = mysqli_query($conn, $sql);

                                            while ($row = mysqli_fetch_array($result)) {


                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row['pname']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['page']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['phnumber']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['dname']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['dept']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['time']; ?>
                                                    </td>

                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
                            <div class="card-header bg-white">
                                <h4 class="card-title mb-0">Doctors</h4>
                            </div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    <?php
                                    $sql = "SELECT * FROM `doctor`;";
                                    $result = mysqli_query($conn, $sql);
                                    $sno = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <li>
                                            <div class="contact-cont">
                                                <div class="float-left user-img m-r-10">
                                                    <a href="profile.php" title="John Doe"><img src="assets/img/user.jpg"
                                                            alt="" class="w-40 rounded-circle"><span
                                                            class="status online"></span></a>
                                                </div>

                                                <div class="contact-info">
                                                    <span class="contact-name text-ellipsis">
                                                        <?php echo $row['Dname']; ?>
                                                    </span>
                                                    <span class="contact-date">
                                                        <?php echo $row['Dept']; ?>
                                                    </span>
                                                </div>

                                            </div>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="doctors.php" class="text-muted">View all Doctors</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                        <!-- <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline-block">Patients List</h4> <a href="patients.php"
                                    class="btn btn-primary float-right">View all</a>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table mb-0 new-patient-table">
                                        <thead>
                                            <tr>
                                                <th>Patient name</th>
                                                <th>Patient Phone number</th>
                                                <th>Patient age</th>
                                                <th>email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM `patient`;";
                                            $result = mysqli_query($conn, $sql);
                                            $sno = 0;
                                            while ($row = mysqli_fetch_array($result)) {

                                                if ($sno > 4) {
                                                    break;
                                                }
                                                $sno += 1;
                                                ?>
                                                <tr>
                                                    <td>
                                                        <img width="28" height="28" class="rounded-circle"
                                                            src="assets/img/user.jpg" alt="">
                                                        <h2>
                                                            <?php echo $row['pname']; ?>
                                                        </h2>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['phone']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['page']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['email']; ?>
                                                    </td>

                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="hospital-barchart">
                            <h4 class="card-title d-inline-block">Hospital Management</h4>
                        </div>
                        <div class="bar-chart">
                            <div class="legend">
                                <div class="item">
                                    <h4>Level1</h4>
                                </div>

                                <div class="item">
                                    <h4>Level2</h4>
                                </div>
                                <div class="item text-right">
                                    <h4>Level3</h4>
                                </div>
                                <div class="item text-right">
                                    <h4>Level4</h4>
                                </div>
                            </div>
                            <div class="chart clearfix">
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">16%</span>
                                        <div class="item-progress" data-percent="16">
                                            <span class="title">OPD Patient</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">71%</span>
                                        <div class="item-progress" data-percent="71">
                                            <span class="title">New Patient</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">82%</span>
                                        <div class="item-progress" data-percent="82">
                                            <span class="title">Laboratory Test</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">67%</span>
                                        <div class="item-progress" data-percent="67">
                                            <span class="title">Treatment</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">30%</span>
                                        <div class="item-progress" data-percent="30">
                                            <span class="title">Discharge</span>
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
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>



</html>