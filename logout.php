<?php 
include "dbname.php";
session_start();
$_SESSION["r_id"] = '';
$_SESSION["name"] = '';
session_destroy();
header("Location:login.php");
session_unset();
?>
