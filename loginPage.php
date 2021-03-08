<!--//https://stackoverflow.com/questions/39031224/how-to-center-cards-in-bootstrap-4-->

<!--link the boostrap css -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<!--to load all the style of cdn picker-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<!--page content-->
<div class="container">
<br>  
<p class="text-center" >Online Bank Appointment-Users</p>
<hr>

<!--like white background card-->
<div class="card bg-light mx-auto" style="width:400px; "> 

<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Login Account</h4>
	<form action="includes/login.php" method="post">
	<div class="form-group input-group">
<!--	make a button behind the text-->
		<div class="input-group-prepend">
		    <span class="input-group-text"><i class="fa fa-user"></i> </span>
		 </div>
		<input type="text" id="login" class="form-control" name="username" placeholder="Enter Username">
    </div> 
   
        
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
		<input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
    </div> 
                                    
    <div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Log In" name="login">
		
    </div>                                                       
	</form>
	
	<form action="register.php">
		<input type="submit" class="btn btn-primary btn-block" value="Register" name="register">
    </form>
    
	<div id="formFooter">
      <a class="underlineHover" href="forgetpassword.php">Forgot Password?</a>
    </div>
</article>
</div> 


</div> 


<style>
p
    {
        font-style: bold 5px;
        font-size: 40px;
        background-color: white;
        color: black;
    }
body
{
    background-image:  linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.6)),url(appointment.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}

</style>