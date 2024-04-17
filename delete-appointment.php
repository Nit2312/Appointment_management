<?php
include ("partials/_dbconnect.php");

if (isset($_GET['delete'])) {
    $pid = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `appointment` WHERE `appointment`.`pid` = $pid";
    $result = mysqli_query($conn, $sql);
}

?>