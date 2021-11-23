<?php
include "config.php";
$_ACCOUNTID = $_SESSION['id'];

$test = mysqli_query($con, "select * from users");
while($test2 = mysqli_fetch_array($test)){

    $test3 = $test2['Postcode'];

    echo $test3;
}
?>