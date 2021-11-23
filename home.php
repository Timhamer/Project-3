<?php
include "config.php";



if($_SESSION['rol'] == 1){
    header("location:klantenoverzicht.php");
    exit();
}else {
    header("location:nieuweorder.php");
}

if(!isset($_SESSION['id'])){
    header('Location: index.php');
}

if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>homepage</h1>
       
</body>
</html>