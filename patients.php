<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
    exit;
}
include ("partials/_dbconnect.php");
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">


<!-- patients23:17-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-patient.php" class="btn btn btn-primary btn-rounded float-right"><i
                                class="fa fa-plus"></i> Add Patient</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-border table-striped custom-table datatable mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `patient`;";
                                    $result = mysqli_query($conn, $sql);
                                    $sno = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td><img width="28" height="28" src="assets/img/user.jpg"
                                                    class="rounded-circle m-r-5" alt=""><?php echo $row['pname']; ?></td>
                                            <td><?php echo $row['page']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit-patient.php"><i
                                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item"
                                                            href="patient_delete.php?pid=<?php echo $row['pid']; ?>"
                                                            data-toggle="modal"><i class="fa fa-trash-o m-r-5"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
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

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- patients23:19-->

</html>