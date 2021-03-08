<!--https://www.w3schools.com/bootstrap/bootstrap_carousel.asp-->
<!--link and plug in jquery-->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">      
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<!-- navigation -->
<?php include "includes/navigation.php"; ?>

<!-- content -->
<div class="container" >

        <div class="row">
			<div class="col-md-7" style="float:left">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" style="display: inline-block;">
				  <div class="item active">
					<img src="images/carousel/bank.jpg" alt="bank" style="width:100%;">
				  </div>

				  <div class="item">
					<img src="images/carousel/appointment.jpg" alt="appointment" style="width:100%;">
				  </div>
				
				  <div class="item">
					<img src="images/carousel/appointments.png" alt="scheduling" style="width:100%;">
				  </div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>	
			
			</div>
           
            <div class="col-md-4" style="float:right;">
                <b><p style="font-size:40px; padding: 70px 0; text-align:center;">Welcome to Bank Appointment Reservation System</p></b>
                
            </div>
        </div>

        <hr>
</div>
		


<?php include "includes/footer.php"; ?>