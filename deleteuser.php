<?php
 $mysqli = new mysqli("localhost","root","","biermanagement");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

include "header.html"; 
    if(isset($_REQUEST['submit'])){
      $sql = "DELETE FROM users WHERE id = {$_REQUEST['id']}";
      if(mysqli_query($con, $sql)){
        $success_message = "Account Verwijderd.";
      }else {
        $error_message = "Account verwijderen mislukt";
      }
    }

    if ($mysqli->mysqli_query($sql)){
        echo $mysqli->affected_rows;
        header("location: klantenoverzicht.php");
    }




  ?>