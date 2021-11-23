<?php
include "config.php";
$_ACCOUNTID = $_SESSION['id'];

$mysqli = new mysqli("localhost","root","","biermanagement");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$SQL = "SELECT * FROM users WHERE id='$_ACCOUNTID'"
echo $_ACCOUNTID

?>