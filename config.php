<?php
session_start();
$host = "localhost";
$user = "deb85590_p21t3";
$password = "Rg0psrMdv0";
$dbname = "deb85590_p21t3";
$con = mysqli_connect($host, $user, $password, $dbname);
if(!$con) {
    die("Connection failed: ".mysqli_connect_error());
} 
?>