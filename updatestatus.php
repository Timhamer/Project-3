<?php

echo $_GET['id'];

// update query maken met id er in
$mysqli = new mysqli("localhost","root","","biermanagement");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$sql = "UPDATE `bestelformulier` SET `Status` = 1 WHERE `id` = $_GET[id]";

if ($mysqli->query($sql)){
    echo $mysqli->affected_rows;
    header("location: overzicht.php");
}

echo $mysqli->error;
