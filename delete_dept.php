<?php
include ("partials/_dbconnect.php");

if (isset($_GET['sno'])) {
    $sno = $_GET['sno'];
    $delete = true;
    $sql = "DELETE FROM `dept` WHERE `dept`.`sno` = $sno";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error" . mysqli_error($conn);
    } else {
        header("location:departments.php");
        echo '<script>
        alert("Deptment Deleted Successfully");
    </script>';
    }
}

?>