<?php
$database_host = 'localhost';
$database_username = 'root';
$database_password = 'test';
$database_name = 'coord';

$link = mysqli_connect($database_host, $database_username, $database_password,$database_name);
if (mysqli_connect_errno())
    die('Could not connect: ' . mysqli_connect_error());
?>
