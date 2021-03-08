<!--connect to database-->
<?php

$connection = mysqli_connect("localhost",'root','','bank-appointment-system');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>