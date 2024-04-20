<?php
include ("partials/_dbconnect.php");

if (isset($_GET['app_id'])) {
    $app_id = $_GET['app_id'];
    $delete = true;
    $sql = "DELETE FROM `appointment` WHERE `appointment`.`app_id` = $app_id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error" . mysqli_error($conn);
    } else {
        echo '<script>
        alert("Appointment Deleted Successfully");
    </script>';
    header("location:appointments.php");
    }
}

?>