<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user = $_SESSION['user'];
}

if ($user == "patient") {
    echo '<ul>
<li class="menu-title">Main</li>
<li>
    <a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
</li>
<ul> ';
}
if ($user == "doctor") {
    echo '<ul>
    <li class="menu-title">Main</li>
    <li>
        <a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
    </li>
    
<li>
    <a href="patients.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
</li>
<li>
    <a href="appointments.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
</li>
<li>
    <a href="schedule.php"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
</li>
<ul> ';

}

if ($user == "admin") {
    echo '
    <ul>
    <li class="menu-title">Main</li>
    <li>
        <a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
    </li>
    
<li>
    <a href="patients.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
</li>
<li>
    <a href="appointments.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
</li>
<li>
    <a href="schedule.php"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
</li>

    <li>
    <a href="doctors.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
    </li>
    <li>
    <a href="departments.php"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
</li>
<ul> 
';
}
?>