<?php
$user = $_SESSION['user'];
if ($user == "doctor") {
    echo '<div class="header">
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
            <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40"
                    alt="Admin">
                <span class="status online"></span></span>
            <span>', $_SESSION['dname'] . '</span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="doctor_profile.php">My Profile</a>
            <a class="dropdown-item" href="edit_doctor_profile.php">Edit Profile</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
    </li>
</ul>
<div class="dropdown mobile-user-menu float-right">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
            class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="doctor_profile.php">My Profile</a>
        <a class="dropdown-item" href="edit_doctor_profile.php">Edit Profile</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
    </div>
</div>
</div>';


}

if ($user == "patient") {
    echo '<div class="header">
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
            <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40"
                    alt="Admin">
                <span class="status online"></span></span>
            <span>', $_SESSION['pname'] . '</span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="patientProfile.php">My Profile</a>
            <a class="dropdown-item" href="edit_patient_profile.php">Edit Profile</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
    </li>
</ul>
<div class="dropdown mobile-user-menu float-right">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
            class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="patientProfile.php">My Profile</a>
        <a class="dropdown-item" href="edit_patient_profile.php">Edit Profile</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
    </div>
</div>
</div>';


}

if ($user == "admin") {
    echo '<div class="header">
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
                    <img class="rounded-circle" src="assets/img/doctor-03.jpg" width="24" alt="Admin">
                    <span class="status online"></span>
                </span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.php">My Profile</a>
                <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.php">My Profile</a>
            <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
    </div>
</div>';
}


?>