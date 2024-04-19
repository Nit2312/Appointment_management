<?php
include ("partials/_dbconnect.php");

if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    $delete = true;
    $sql = "DELETE FROM `patient` WHERE `patient`.`pid` = $pid";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error" . mysqli_error($conn);
    } else {
        echo '<script>
        alert("Patient Data Deleted Successfully");
    </script>';
    header("location:patients.php");
    }
}

?>