<?php
include "config.php";
$_ACCOUNTID = $_SESSION['id'];

SELECT * FROM users WHERE id='$_ACCOUNTID'
?>