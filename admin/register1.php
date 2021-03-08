<!--link to jquery and boostrap css-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<?php include "includes/db.php"; ?>

<?php

if (isset($_POST['register'])) {

            $admin_username = $_POST['username'];
            $admin_firstname = $_POST['firstname'];
            $admin_lastname = $_POST['lastname'];
            $admin_email = $_POST['email'];
            $admin_phone_no = $_POST['phone_no'];
            $admin_password = $_POST['password'];


            if ($admin_username=="" || $admin_firstname=="" || $admin_lastname=="" || $admin_email=="" || $admin_phone_no=="" || $admin_password=="") {
                echo "<script type='text/javascript'>
			     alert('Please fill out the form');
                window.location='../admin/register1.php';
		          </script>";
                }
            elseif (strlen($admin_phone_no)!=10) {
                echo "<script type='text/javascript'>
			     alert('PhoneNo Must Contain 10 numbers');
                window.location='../admin/register1.php';
		          </script>";
            }

        else {

            $query = "INSERT INTO admin(admin_username, admin_password, admin_firstname, admin_lastname, admin_email, admin_phoneno, admin_role) VALUES('$admin_username', '$admin_password', '$admin_firstname', '$admin_lastname', '$admin_email', '$admin_phone_no', 'admin') ";

            $register_admin = mysqli_query($connection, $query);

            if(!$register_admin) {
                die("Query Failed" . mysqli_error($connection));
                }
            echo "<script type='text/javascript'>
			alert('Successfully registered. Now can login your account!');
            window.location='../admin/loginPage1.php';
		      </script>";

            }

}
?>

    <div class="container">
        <br>     
       <p class="text-center" style="font-style: bold 5px;
        font-size: 40px;
        background-color: white;
        color: black;">Online Bank Appointment-Admin</p>
        <hr>
            <!-- white background card -->
            <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
	        <h4 class="card-title mt-3 text-center">Create Your Admin Account</h4>
	        <p class="text-center">Get started with your account</p>
	        
	<form action="" method="post" enctype="multipart/form-data">
	    <div class="form-group input-group">
		    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		     </div>
		 <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username">
        </div> 
        
	    <div class="form-group input-group">
		    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		     </div>
		 <input type="text" class="form-control" id="email" placeholder="Enter Firstname" name="firstname">
        </div> 
        
	    <div class="form-group input-group">
		    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		     </div>
		 <input type="text" class="form-control" id="email" placeholder="Enter Lastname" name="lastname">
        </div> 
    
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		     </div>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
        </div> 
        
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		    </div>
    	<input type="text" class="form-control" id="pwd" placeholder="Enter Phone Number" name="phone_no">
        </div> 
        
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		    </div>
        <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
        </div> 
                                     
        <div class="form-group">
            <button type="submit" name="register" class="btn btn-primary btn-block"> Create Account  </button>
        </div>   
           
        <p class="text-center">Already have an existing account?<a href="loginPage1.php"> Log In</a> </p>                                                                 
    </form>
        </article>
    </div>
</div> 


<style>
body
{
    
    background-color: #142433;
    height: 125vh;
    background-size: cover;
    background-position: center;
}
</style>