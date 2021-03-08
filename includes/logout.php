<!--//https://www.php.net/manual/en/function.session-start.php-->

<?php session_start(); ?>
<?php 

$_SESSION['s_cus_name'] = null;
$_SESSION['s_cus_firstname'] = null;
$_SESSION['s_cus_lastname'] = null;
$_SESSION['s_cus_role'] = null;
session_destroy();
header("Location: ../loginPage.php");

?>