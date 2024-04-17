<?php

if ($user == "patient") {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];

    $sql = "SELECT * FROM `patient` WHERE pid = '$pid' and pname = '$pname';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        $_SESSION['pname'] = $pname;
        $_SESSION['pid'] = $pid;
        header("location:patient_index.php");
    } else {
        $showError = "Invalid Crendentials";
    }
}
if ($user == "doctor") {
    $did = $_POST['did'];
    $dname = $_POST['dname'];

    $sql = "SELECT * FROM `doctor` WHERE did = '$did' and dname = '$dname';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        $_SESSION['dname'] = $dname;
        $_SESSION['did'] = $did;
        header("location:doctor_index.php");
    } else {
        $showError = "Invalid Crendentials";
    }
}
if ($user == "admin") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name == 'admin' && $password == 'admin123') {
        $login = true;
        header("location:index.php");
    } else {
        $showError = "Invalid Crendentials";
    }
}
?>