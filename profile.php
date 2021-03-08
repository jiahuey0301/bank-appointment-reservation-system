<!--//https://www.w3schools.com/howto/howto_js_toggle_password.asp-->
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
<!-- navigation -->
<?php include "includes/navigation.php"; ?>


      
    <div class="container" style="width: 85%; padding-bottom:80px; padding-left:10%;">
        
        <!--for tablink-->
        <div class="tab" style="width:82%;">
            <button class="tablinks" style="width: 23%" onclick="openCity(event, 'Personel Details')">Personal Details</button>
            <button class="tablinks" style="width: 23%"  onclick="openCity(event, 'Edit Details')">Edit Details</button>
            <button class="tablinks" style="width: 30%" onclick="openCity(event, 'Upcoming Appointment')">Upcoming Appointment</button>
            <button class="tablinks" style="width: 24%" onclick="openCity(event, 'History')">History</button>
        </div>

        <!--tabcontent-->
        <div id="Personel Details" class="tabcontent">
          <h3>Details</h3>
          <br>
    <?php
          $curr_cus_id = $_SESSION['s_cus_id'];
          $query = "SELECT * FROM customers where cus_id = $curr_cus_id";

          $pick_cus = mysqli_query($connection, $query);
          while ($row = mysqli_fetch_assoc($pick_cus)) {
            $cus_name = $row['cus_name'];
            $cus_firstname = $row['cus_firstname'];
            $cus_lastname = $row['cus_lastname'];
            $cus_email = $row['cus_email'];
            $cus_phoneno = $row['cus_phoneno'];
    ?>

            <table class="table table-striped" style="width: 50%">
              <tbody>
                <tr>
                  <td><b>Username:</b> </td>
                  <td><?php echo $cus_name; ?></td>
                </tr>
                <tr>
                  <td><b>FirstName:</b> </td>
                  <td><?php echo $cus_firstname; ?></td>
                </tr>
                <tr>
                  <td><b>Lastname: </b></td>
                  <td><?php echo $cus_lastname; ?></td>
                </tr>
                <tr>
                  <td><b>Email: </b></td>
                  <td><?php echo $cus_email; ?></td>
                </tr>
                <tr>
                  <td><b>Phone No: </b></td>
                  <td><?php echo $cus_phoneno; ?></td>
                </tr>
              </tbody>
            </table>

        <?php } ?>
        </div>
        
        <div id="Edit Details" class="tabcontent">
          <h3>Edit Details</h3>
          <br>
        <?php
            $curr_cus_id = $_SESSION['s_cus_id'];
            $query = "SELECT * FROM customers WHERE cus_id = $curr_cus_id ";
            
            $pick_cus = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($pick_cus)) {
                $cus_name = $row['cus_name'];
                $cus_password = $row['cus_password'];
                $cus_firstname = $row['cus_firstname'];
                $cus_lastname = $row['cus_lastname'];
                $cus_password = $row['cus_password'];
                $cus_phoneno = $row['cus_phoneno'];
                $cus_email = $row['cus_email'];   
            }

            if (isset($_POST['update-detail'])) {
              $cus_name = $_POST['cus_name'];
              $cus_password = $_POST['cus_password'];
              $cus_firstname = $_POST['cus_firstname'];
              $cus_lastname = $_POST['cus_lastname'];
              $cus_phoneno = $_POST['cus_phoneno'];
              $cus_email = $_POST['cus_email'];

              $query = "UPDATE customers SET cus_name='{$cus_name}', cus_password='{$cus_password}', cus_firstname='{$cus_firstname}', cus_lastname='{$cus_lastname}', cus_password='{$cus_password}', cus_phoneno='{$cus_phoneno}', cus_email='{$cus_email}' WHERE cus_id=$curr_cus_id";

              $update_detail = mysqli_query($connection,$query);
              if (!$update_detail) {
                die("Query Failed" . mysqli_error($connection));
              }
              header("Location:profile.php");
            }
            ?>

            <form action="" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="username">Username</label>
                <input value="<?php echo $cus_name; ?>" type="text" class="form-control" name="cus_name">
              </div>

              <div class="form-group">
                <label for="firstname">Firstname</label>
                <input value="<?php echo $cus_firstname; ?>" type="text" class="form-control" name="cus_firstname">
              </div>

              <div class="form-group">
                <label for="lastname">Lastname</label>
                <input value="<?php echo $cus_lastname; ?>" type="text" class="form-control" name="cus_lastname">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input value="<?php echo $cus_email; ?>" type="email" class="form-control" name="cus_email">
              </div>

              <div class="form-group">
                <label for="phoneno">PhoneNo</label>
                <input value="<?php echo $cus_phoneno; ?>" type="text" class="form-control" name="cus_phoneno">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input value="<?php echo $cus_password?>" id="myInput" type="password" class="form-control" name="cus_password">
              </div>

              <div class="form-group">
                <input type="checkbox" onclick="myFunction()"> Show Password
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="update-detail" value="Update">
              </div>
            </form>
            </div>
    
        <div id="Upcoming Appointment" class="tabcontent">
          <h3>Upcoming Appointment:</h3>
        <?php
          $query = "SELECT * FROM appointment INNER JOIN services ON appointment.ser_id = services.ser_id where appointment.cus_id = $curr_cus_id AND appointment.date >= CURDATE() ORDER BY appointment.date";

          $select_appointment = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($select_appointment)) {
              
            $cus_name = $row['cus_name'];
            $cus_email = $row['cus_email'];
            $cus_phoneno = $row['cus_phoneno'];
            $date = $row['date'];
            $time = $row['time_list'];
            $appointment_id = $row['appointment_id'];
            $ser_id = $row['ser_id'];
            $ser_name = $row['ser_name'];
        ?>
            <br>
            
            <table class="table table-striped" style="width: 50%">
              <tbody>
							<tr>
							  <td><b>Appointment No:</b></td>
							  <td><?php echo $appointment_id; ?></td>
							</tr>
                            <tr>
							  <td><b>Customer Name:</b></td>
							  <td><?php echo $cus_name; ?></td>
							</tr>
							<tr>
							  <td><b>Customer Email:</b></td>
							  <td><?php echo $cus_email; ?></td>
							</tr>
							<tr>
                               <td><b>Customer Phone.no:</b></td>
							  <td><?php echo $cus_phoneno; ?></td>
							</tr>
						    <tr>
							  <td><b>Service chosen:</b></td>
							  <td><?php echo $ser_name; ?></td>
							</tr>	
                            <tr>
                               <td><b>Appointment Date:</b></td>
							  <td><?php echo $date; ?></td>
							</tr>
							<tr>
                               <td><b>Appointment Time:</b></td>
							  <td><?php echo $time; ?></td>
							</tr>
                            <tr>
                            <td><b>Cancel Appointment</b></td>
							<td>	
                              <form action="includes/cancel.php?appointment_id=<?php echo $appointment_id ?>&ser_id=<?php echo $ser_id ?>" method="post">
								  <button class="btn btn-primary btn-xs" name="cancel">Cancel</button>
                                </form></td>
                            </tr>
                        <!--line break-->
							<br>
							
            </tbody>
            </table>

          <?php  } ?>
          <br>
            </div>
          
          <div id="History" class="tabcontent">
          <h3><b>History of appointment booked:</b></h3>
          <?php
          $query1 = "SELECT * FROM appointment INNER JOIN services ON appointment.ser_id = services.ser_id where appointment.cus_id = $curr_cus_id AND appointment.date < CURDATE()";

          $select_history = mysqli_query($connection, $query1);
          while ($row = mysqli_fetch_assoc($select_history)) {
            $cus_name = $row['cus_name'];
            $cus_email = $row['cus_email'];
            $cus_phoneno = $row['cus_phoneno'];
            $date = $row['date'];
            $time = $row['time_list'];
            $appointment_id = $row['appointment_id'];
            $ser_id = $row['ser_id'];
            $ser_name = $row['ser_name'];

            ?>
            <br>
           
              <table class="table table-striped" style="width: 50%">
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
							<br>			
            </tbody>
            </table>
          <?php  } ?>
            </div>

    </div>          

<script>

//show password
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

//function tab content
    function openCity(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<?php include "includes/footer.php"; ?> 