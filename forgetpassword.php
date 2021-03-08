<!-- link to bootstrap css, jquery and fontawesome-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<?php include "includes/db.php"; ?>

<?php
    if (isset($_POST['Submit'])) {

    $cus_name = $_POST['cus_name'];
    $cus_email = $_POST['cus_email'];

        if ($cus_name=="" || $cus_email=="" ) { 
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

    $query = "SELECT * FROM customers where cus_name='$cus_name' AND cus_email='$cus_email'";
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
	$random = rand(100000,999999);
	$new_password = $random;
	$email_password = $new_password;

	$query = "UPDATE customers SET cus_password = '$new_password' where cus_email='$cus_email'";
	$reset = mysqli_query($connection, $query);
	$to ="$cus_email";
	$subject = "Notification of Password Updated";
	$message = "The new password for this account is $email_password . \nPlease change your password after you log in. ";
	$headers = "From: onlinebanking518@gmail.com";
	if (mail($to,$subject,$message,$headers)){
		?>
		<script type="text/javascript">
			alert("Your RANDOM password has been emailed to you. Please kindly check your email! Thank you.");
			window.location.replace("loginPage.php")
		</script>
<?php
	}
	else {
?>
		<script type="text/javascript">
			alert("There was a problem sending the email. Sorry for inconvenience problem!");
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
	<h6 class="card-title mt-3 text-center">Please enter your username and your email address into the form so we can send RANDOM password into your email.</h6>
	
	<form name="forgot_password" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		<input type="text" class="form-control" id="login" placeholder="Enter Username" name="cus_name">
    </div> 
        
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="cus_email">
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
    background-image:  linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.6)),url(appointment.jpg);
    height: 90vh;
    background-size: cover;
    background-position: center;
}
</style>