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
                <?php
                include ("partials/_sidebar.php");
                ?>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline-block mb-0">Upcoming Appointments</h4>
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
                                            $pid = $_SESSION['pid'];
                                            $sql = "SELECT * FROM `appointment` where `pid` = '$pid';";
                                            $result = mysqli_query($conn, $sql);
                                            $sno = 1;
                                            while ($row = mysqli_fetch_array($result)) {

                                                if ($sno > 6) {
                                                    break;
                                                }
                                                $sno += 1;
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
                                <h4 class="card-title d-inline-block">Patients List</h4>
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