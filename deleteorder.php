<?php
echo $_GET['id'];

// update query maken met id er in
$mysqli = new mysqli("localhost","root","","biermanagement");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if(isset($_REQUEST['submit'])){
    $sql = "DELETE FROM users WHERE id = {$_REQUEST['id']}";
    if(mysqli_query($con, $sql)){
      $success_message = "Account Verwijderd.";
    }else {
      $error_message = "Account verwijderen mislukt";
    }
  }