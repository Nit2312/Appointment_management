<?php
$host = 'localhost:3307';
$username = 'root';
$password = '';
$dbname = 'project';

$conn = new mysqli($host, $username, $password, $dbname);
if (!$conn) {
    die("Cannot connect to the database." . $conn->error);
}


?>