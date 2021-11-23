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
}

?>
