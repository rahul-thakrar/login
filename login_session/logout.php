<?php
$con = mysqli_connect("localhost","root","","rahul-db");
session_start();
session_destroy();
header('location:index.php');
?>