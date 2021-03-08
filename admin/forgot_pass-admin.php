<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<?php include "includes/db.php"; ?>
<?php

    if (isset($_POST['Submit'])) {
        $admin_username = $_POST['username'];
        $admin_email = $_POST['admin_email'];

            if ($admin_username=="" ||$admin_email=="" ) {
  ?>
                <script type="text/javascript">
			     alert("Please fill out the form");
                </script>
    <?php
            }

            else {
                $random = rand(100000,999999);
                $new_password = $random;
                $email_password = $new_password;

                $query = "SELECT * FROM admin where admin_username='$admin_username' AND admin_email='$admin_email'";
                $accept = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($accept);
                if(mysqli_num_rows($accept) != 1) {
    ?>
		            <script type="text/javascript">
			         alert("Wrong Username or Email");
		          </script>
	<?php
                }
else {
	$random = rand(000000,999999);
	$new_password = $random;
	$email_password = $new_password;

	$query = "UPDATE admin SET admin_password = '$new_password' where admin_email='$admin_email'";
	$reset = mysqli_query($connection, $query);
	$to ="$admin_email";
	$subject = "Notification of Password Updated";
	$message = "The new password for this account is $email_password . \nPlease change your password after you log in. ";
	$headers = "From: onlinebanking518@gmail.com";
	if (mail($to,$subject,$message,$headers)){
		?>
		<script type="text/javascript">
			alert("Your RANDOM password has been emailed to you. Please kindly check your email! Thank you.");
			window.location.replace("loginPage1.php")
		</script>
		<?php
	}
	else {
    ?>
		<script type="text/javascript">
			alert("There was a problem sending the email. Sorry for inconvenience caused!");
		</script>
	<?php
            }
    }
  }

}

?>

<div class="container">
<hr>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Forgot Your Password?</h4>
	<h6 class="card-title mt-3 text-center">Please enter your username and your email address into the form. We will send you a RANDOM password to login your account.</h6>
	
	<form name="forgot_password" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		<input type="text" id="login" class="form-control" name="username" placeholder="Enter Username">
    </div> 
        
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="admin_email">
    </div> 
                                      
    <div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Submit" name="Submit">
		
    </div>                                                             
	</form>
</article>
</div> 

</div> 

<style>
body
{
    
    background-color: #142433;
    height: 100vh;
    background-size: cover;
    background-position: center;
}

</style>