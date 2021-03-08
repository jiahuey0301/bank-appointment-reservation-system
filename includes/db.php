<?php

//create connection to connect to database
$connection = mysqli_connect("localhost",'root','','bank-appointment-system');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>