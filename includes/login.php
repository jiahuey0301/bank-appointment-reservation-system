<?php include "db.php"; ob_start(); ?>
<?php session_start(); ?>
<?php 

//login function
if (isset($_POST['login']) || isset($_POST['register'])) {
	
	$cus_name = $_POST['username'];
	$cus_password = $_POST['password'];

	$query = "SELECT * FROM customers WHERE cus_name = '$cus_name'";
	$pick_cus = mysqli_query($connection,$query);

	if (!$pick_cus) {
		die("Query Failed" . mysqli_error($connection));
	}
    

	while ($row = mysqli_fetch_assoc($pick_cus)) {
		$db_cus_id = $row['cus_id'];
		$db_cus_name = $row['cus_name'];
		$db_cus_password = $row['cus_password'];
		$db_cus_firstname = $row['cus_firstname'];
		$db_cus_lastname = $row['cus_lastname'];
		$db_cus_role = $row['cus_role'];
		

		if($cus_name === $db_cus_name && $cus_password === $db_cus_password) {

			$_SESSION['s_cus_name'] = $db_cus_name;
			$_SESSION['s_cus_firstname'] = $db_cus_firstname;
			$_SESSION['s_cus_lastname'] = $db_cus_lastname;
			$_SESSION['s_cus_role'] = $db_cus_role;
			
			$_SESSION['s_cus_id'] = $db_cus_id;
			$_SESSION["loggedin"] = 1;

			if ($db_cus_role == 'subscriber') {
				header("Location: ../index1.php");
				exit;			
			}
		}
		else {
			
		echo "<script type='text/javascript'>
			alert('Wrong Username or Password');
            window.location='../loginPage.php';
		</script>";
				
	}}
    echo "<script type='text/javascript'>
			alert('Wrong Username or Password');
            window.location='../loginPage.php';
		</script>";
	mysqli_close($connection );
}


?>