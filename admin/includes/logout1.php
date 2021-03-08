<?php session_start(); ?>
<?php 

$_SESSION['s_username'] = null;
$_SESSION['s_firstname'] = null;
$_SESSION['s_lastname'] = null;
$_SESSION['s_role'] = null;
session_destroy();
header("Location: ../loginPage1.php");

?>