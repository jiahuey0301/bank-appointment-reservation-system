<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
<!-- include the menu -->
<?php include "includes/navigation.php"; 
          
          $curr_cus_id = $_SESSION['s_cus_id'];
          $query = "SELECT * FROM customers where cus_id = $curr_cus_id";

          $pick_customer = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($pick_customer)) {
            $cus_name = $row['cus_name'];
            $cus_firstname = $row['cus_firstname'];
            $cus_lastname = $row['cus_lastname'];
            $cus_email = $row['cus_email'];
            $cus_phoneno = $row['cus_phoneno'];
		  }
?>
   
     <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                        <h2>Your Appointment: </h2>
						
                <?php
						if($curr_cus_id = $_SESSION['s_cus_id']){
                            
                            //select the appointment element which match with services table element and arrange it 
						$query = "SELECT * FROM appointment INNER JOIN services ON appointment.ser_id = services.ser_id where appointment.cus_id = $curr_cus_id ORDER BY appointment_id DESC LIMIT 1";
						
                        $pick_appointment = mysqli_query($connection, $query);
				        while ($row = mysqli_fetch_assoc($pick_appointment)) {
							$cus_name = $row['cus_name'];
							$cus_email = $row['cus_email'];
                            $cus_phoneno = $row['cus_phoneno'];
                            $date = $row['date'];
                            $time = $row['time_list'];
							$appointment_id = $row['appointment_id'];
							$ser_id = $row['ser_id'];
							$ser_name = $row['ser_name'];

                ?>
                       
                        <table class="table table-bordered table-hover" style="width: 100%; ">
						  <tbody>
							<tr>
							  <td><b>Appointment No:</b> </td>
							  <td><?php echo $appointment_id; ?></td>
							</tr>
                            <tr>
							  <td><b>Customer Name:</b> </td>
							  <td><?php echo $cus_name; ?></td>
							</tr>
							<tr>
							  <td><b>Customer Email:</b> </td>
							  <td><?php echo $cus_email; ?></td>
							</tr>
							<tr>
							  <td><b>Customer Phone.no:</b> </td>
							  <td><?php echo $cus_phoneno; ?></td>
							</tr>
						    <tr>
							  <td><b>Service chosen:</b> </td>
							  <td><?php echo $ser_name; ?></td>
							</tr>	
                            <tr>
							  <td><b>Appointment Date:</b> </td>
							  <td><?php echo $date; ?></td>
							</tr>
							<tr>
							  <td><b>Appointment Time:</b> </td>
							  <td><?php echo $time; ?></td>
							</tr>
							
                            <tr>
                                <td><b>Cancel Appointment</b></td>
							<td>	
                              <form action="includes/cancel.php?appointment_id=<?php echo $appointment_id ?>&ser_id=<?php echo $ser_id ?>" method="post">
								  <button class="btn btn-primary btn-xs" name="cancel">Cancel</button>
                                </form>
                            </td>
                            </tr>
                    <!--line break-->
							<br>
							
						  </tbody>
						</table>
                </div>
						
				<?php } 
					}
                else {
				echo "<script type='text/javascript'>
			alert('Please login first!');
            window.location='loginPage.php';
		</script>";
					}
					?>   
            </div>
        </div>
        
        <hr>

<?php include "includes/footer.php"; ?>