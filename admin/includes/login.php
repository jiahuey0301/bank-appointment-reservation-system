<?php include "db.php"; ob_start(); ?>
<?php session_start(); ?>
<?php 

    if (isset($_POST['login']) || isset($_POST['register'])) {
	
	   $admin_username = $_POST['username'];
	   $admin_password = $_POST['password'];

	   $query = "SELECT * FROM admin WHERE admin_username = '$admin_username'";
        
	   $select_admin = mysqli_query($connection,$query);
	   if (!$select_admin) {
		die("Query Failed" . mysqli_error($connection));
	   }

	while ($row = mysqli_fetch_assoc($select_admin)) {
		$db_admin_id = $row['admin_id'];
		$db_admin_username = $row['admin_username'];
		$db_admin_password = $row['admin_password'];
		$db_admin_firstname = $row['admin_firstname'];
		$db_admin_lastname = $row['admin_lastname'];
		$db_admin_role = $row['admin_role'];
		
		if($admin_username === $db_admin_username && $admin_password === $db_admin_password) {

			$_SESSION['s_id'] = $db_admin_id;
            $_SESSION['s_username'] = $db_admin_username;
			$_SESSION['s_firstname'] = $db_admin_firstname;
			$_SESSION['s_lastname'] = $db_admin_lastname;
			$_SESSION['s_role'] = $db_admin_role;
			$_SESSION["loggedin"] = 1;

			if ($db_admin_role == 'admin') {
				header("Location: ../index.php");
				exit;			
            }	
        }
			
		else {
			
		echo "<script type='text/javascript'>
			alert('Wrong Username or Password');
            window.location='../loginPage1.php';
		</script>";		
	       }
        }
    echo "<script type='text/javascript'>
			alert('Wrong Username or Password');
            window.location='../loginPage1.php';
		</script>";
    
	mysqli_close($connection );
}
?>