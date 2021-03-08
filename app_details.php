<!--REFERENCE://https://github.com/chmbila202/Online-Bus-Booking-System/blob/master/bus_info.php-->
<!--copy the all variable from db.php into this file-->
<?php include "includes/db.php"; ?>
<!--copy the all variable from header.php into this file-->
<?php include "includes/header.php"; ?>
<!--copy the all variable from navigation.php into this file-->
<?php include "includes/navigation.php"; ?>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <!-- content -->
    <div class="container"  >
        <div class="row"  >
            <div class="col-md-8">
                <?php 

                    if(isset($_GET['ser_id'])) {
                        $selected_ser = $_GET['ser_id'];
                    }

                    $query = "SELECT *  FROM  services WHERE ser_id = $selected_ser ";

                    $select_all_services = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($select_all_services)) {
                        $ser_name = $row['ser_name'];
                        $ser_desc = $row['ser_desc'];
                        $ser_id = $row['ser_id'];
                        $type_cat_id = $row['type_cat_id'];
                       
                      ?>     
                        
 <?php

                 if (isset($_SESSION['s_cus_id'])) {
?>
                <div class="jumbotron" style="width:150%;" >
<!--                    page after click service -->
                    <div class="container" >
                            <h2>Do you want to make appointment for <?php echo $ser_name; ?> ?</h2>
                               
                                <form action="" method="post" class="form-horizontal">
                                    <select name="book_count" style="margin-bottom: 15px;margin-top: 15px;">
                                        <option value="1">Yes</option>
                                        <option value="0">No, back to category page</option>
                                    </select>
                                    
                                    <button class="btn-xs btn-primary" style="margin-left: 5px;">GO</button>
                                </form>
                                


<?php

                    if (isset($_POST['book_count'])) {
                            $count = $_POST['book_count'];
                            //echo "<h1>$count</h1>";
                                if ($count == 1){?>
                                
                                <form action="app_details.php?ser_id=<?php echo $selected_ser ?>&count=<?php echo $_POST['book_count'] ?>" method="post" class="form-horizontal">
                                      <h6 style="font-size:20px;">Please enter your details </h6>
                                       
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="name">
                                            </div>
                                    </div>
                                        
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                                        </div>
                                    </div>
                                         
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Contact:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="contact" placeholder="Enter PhoneNo" name="contact">
                                        </div>
                                    </div>  
                                    
                                    <div class="form-group" >
		                                <label class="control-label col-sm-2" for="date">Date:</label>
		                                <div class="col-sm-10">
                                            <input id="datepicker" type="text"  name="date" class="form-control datepicker"  autocomplete="off" placeholder="  YYYY/MM/DD" >
		                                </div>
<!--pick the date- before date and weekends cannot click-->
<script>
     $("#datepicker").datepicker({
         dateFormat: 'yy-mm-dd',
         minDate: new Date(),
    beforeShowDay: function(date) {
       var show = true;
       if(date.getDay()==6||date.getDay()==0) show=false;
       return [show];
    }
         
});  
</script>
                                    </div>

                       
                                <button class="btn btn-primary" name="book1" style="margin-left: 40%; margin-top: 15px;">Proceed</button> 
                                   
                                   
<?php
                                    } 
                                   
                            else{ 
                                ?>
                <?php header("Location:http://localhost/Online-Bank/service_categories.php ")?>
                                
                <?php } ?>
								</form>	
								
            <?php
                        }

                            ?>
                                

             <?php

                        if (isset($_POST['book1'])) {
				
                            if (isset($_GET['count'])) {
                                    $count = $_GET['count'];
                                    //echo "<h1>$count</h1>";
                                    }
									
                                    $cus_name = $_POST['name'];
									$cus_email = $_POST['email'];
                                    $cus_contact = $_POST['contact'];
                                    $date = date('Y-m-d',strtotime($_POST['date']));
                                    
                                    //echo $name;
                                    //echo $date;
                                if ($cus_name=="" || $cus_email=="" || $cus_contact=="" || $date=="") {
  
                                    echo "<script type='text/javascript'>
			alert('Please fill out the form');
            window.location='../Online-Bank/app_details.php?ser_id=$selected_ser';
		</script>";
}
                                    
                 ?>
                                    
                         <form action="" method="post" class="form-horizontal">
                         
                        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>" />
                        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                        <input type="hidden" name="contact" value="<?php echo $_POST['contact']; ?>" />
                        <input type="hidden" name="date" value="<?php echo $_POST['date']; ?>" />
                                     
                                <div class="form-group" >
                                     <h2><b>Select one time:</b></h2>
                                     <?php include "seats.php"; 
                                    ?>
                                </div>
                                     
                                <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 40%; margin-top: 15px;" value="">Book Your Appointment</button>
                        
                        </form>
                                   
                                   <?php  } ?>
                                   
                                
            <?php

                        if (isset($_POST['submit'])) {
                            
                            if (isset($_GET['count'])) {
                                    $count = $_GET['count'];
                                    //echo "<h1>$count</h1>";
                                        
                                }
									
                                    
                                $cus_name = $_POST['name'];
								$cus_email = $_POST['email'];
                                $cus_contact = $_POST['contact'];
                                $date = date('Y-m-d',strtotime($_POST['date']));
                                $seats = $_POST['seatlist'];
                            //show all booked time include current 
                                $separated = implode(",", $seats);
                                //echo $separated;
                                    
                                //echo $name;
                                //echo $date;
									
                                //create new array ,initializing the seatArr list
                                 
								$seat_arr = array();
                                       
                                //create new array
								$new_seats_array=array();
                                       
                                //select the same key in id,date and timelist in appointment table 
                                $query_seat = "SELECT date, ser_id,time_list FROM appointment WHERE date ='".$date."' AND ser_id=$ser_id;" ;
 
                                //across the database
                                $get_seat = mysqli_query($connection,$query_seat);
                                       
                                //while loop until meet condition
                                while($row = mysqli_fetch_assoc($get_seat)) {
                                        
                                    //through the database go for time list 
                                    $seat_arr[] = $row['time_list'];	
                                }
                                    
                            //differenciate the seat_arr, seats then the not included one is the answer(new seats array)
                                      
								$new_seats_array = array_values(array_diff($seats , $seat_arr));
                                $comma_separated = implode(",", $new_seats_array);
                                //echo $comma_separated;// display the output

                                    for ($i=0; $i < $count; $i++) { 
                                        $curr_seat = $new_seats_array[$i];
  
                                        $cus_id = $_SESSION['s_cus_id'];

                                        $query = "INSERT INTO appointment(ser_id, cus_id, cus_name, cus_email, cus_phoneno, date, time_list) VALUES($selected_ser, $cus_id , '$cus_name', '$cus_email', '$cus_contact', '$date','$curr_seat')";


                                        $booking_query = mysqli_query($connection,$query);
                                        if (!$booking_query) {
                                            die("Query Failed" . mysqli_error($connection));
                                        }
										include "sendmail.php";
                                       }
                            
                                echo "<script type='text/javascript'>
			alert('Successfully booked! Please check your email!');
            window.location='cus_appo_record.php';
		</script>";
                                     
                                   }

             ?>
                            </div>
                    </div>
            <?php } ?>

            <hr>
    <?php }?>
                    
                    
<?php include "includes/footer.php"; ?>