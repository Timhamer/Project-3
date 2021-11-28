<?php

echo $_GET['id'];

// update query maken met id er in
$mysqli = new mysqli("localhost","deb85590_p21t3","Rg0psrMdv0","deb85590_p21t3");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$sql = "UPDATE `bestelformulier1` SET `Status` = 1 WHERE `id` = $_GET[id]";

if ($mysqli->query($sql)){
    echo $mysqli->affected_rows;
    header("location: overzicht.php");
}

echo $mysqli->error;


