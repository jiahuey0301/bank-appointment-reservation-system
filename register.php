<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<!--copy the all variable from db.php into this file-->
<?php include "includes/db.php"; ?>
<?php

//submit once click register button
if (isset($_POST['register'])) {
    $cus_name = $_POST['username'];
    $cus_firstname = $_POST['firstname'];
    $cus_lastname = $_POST['lastname'];
    $cus_email = $_POST['email'];
    $cus_phone_no = $_POST['phone_no'];
    $cus_password = $_POST['password'];

    

if ($cus_name=="" || $cus_firstname=="" || $cus_lastname=="" || $cus_email=="" || $cus_phone_no=="" || $cus_password=="") {
  
  echo "<script type='text/javascript'>
			alert('Please fill out the form');
            window.location='../Online-Bank/register.php';
		</script>";
    
}
elseif (strlen($cus_phone_no)!=10) {
  
  echo "<script type='text/javascript'>
			alert('Phone number should have 10 numbers');
            window.location='../Online-Bank/register.php';
		</script>";
}

else {

$query = "INSERT INTO customers(cus_name, cus_password, cus_firstname, cus_lastname, cus_email, cus_phoneno, cus_role) VALUES('$cus_name', '$cus_password', '$cus_firstname', '$cus_lastname', '$cus_email', '$cus_phone_no', 'subscriber') ";

$register_user = mysqli_query($connection, $query);

if(!$register_user) {
    die("Query Failed" . mysqli_error($connection));
}
echo "<script type='text/javascript'>
			alert('Successfully registered. Now can login your account!');
            window.location='loginPage.php';
		</script>";


}

}

?>
<!--register form-->
<div class="container">
<br>  <p class="text-center" style="font-style: bold 5px;
        font-size: 40px;
        background-color: white;
        color: black;">Online Bank Appointment-Users</p>
<hr>

<!--like a card-->
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"><i class="fa fa-user"></i> </span>
		 </div>
		 <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username">
    </div> 
    
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"><i class="fa fa-user"></i> </span>
		 </div>
		 <input type="text" class="form-control" id="email" placeholder="Enter Firstname" name="firstname">
    </div>
        
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"><i class="fa fa-user"></i> </span>
		 </div>
		 <input type="text" class="form-control" id="email" placeholder="Enter Lastname" name="lastname">
    </div> 
        
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"><i class="fa fa-envelope"></i> </span>
		 </div>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div> 
        
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"><i class="fa fa-phone"></i></span>
		</div>
    	<input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone_no">
    </div> 
        
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
    </div>         
                                  
    <div class="form-group">
        <button type="submit" name="register" class="btn btn-primary btn-block">Create Account</button>
    </div>     
    
    <p class="text-center">Already have an existing account? <a href="loginPage.php">Log In</a></p>                                                                 
</form>
</article>
</div> 
</div> 



<style>

body
{
    background-image:  linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.6)),url(appointment.jpg);
    height: 125vh;
    background-size: cover;
    background-position: center;
}



</style>