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


?>
