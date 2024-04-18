<?php
include ("partials/_dbconnect.php");

if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    $delete = true;
    $sql = "DELETE FROM `appointment` WHERE `appointment`.`pid` = $pid";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error" . mysqli_error($conn);
    } else {
        echo '<script>
        alert("Appointment Deleted Successfully");
    </script>';
    header("location:appointment.html");
    }
}

?>