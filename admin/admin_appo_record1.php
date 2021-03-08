<!--display all history/past appointment-->
<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">

        <!--navigation-->
        <?php include"includes/admin_navigation.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                    
                        <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Appointment_Id</th>
                                        <th>Service_Id</th>
                                        <th>Customer_Id</th>
                                        <th>Customer Name</th>
                                        <th>Customer Email</th>
                                        <th>Customer Phoneno</th>
                                        <th>Appointment Date</th>
										<th>Appointment Time</th>
                                    </tr>
                                </thead>
                                
                                <tbody>

                                <?php
								    $query="SELECT * FROM appointment where appointment.date < CURDATE() ORDER BY appointment.date";		
                                    $pick_all_appo = mysqli_query($connection ,$query);
                                        while($row = mysqli_fetch_assoc($pick_all_appo)) {
                                            $appointment_id = $row["appointment_id"];
                                            $ser_id = $row["ser_id"];
                                            $cus_id = $row["cus_id"];
											$cus_name = $row["cus_name"];
                                            $cus_email = $row["cus_email"];
                                            $cus_phoneno = $row["cus_phoneno"];
                                            $date = $row["date"];
                                            $time = $row["time_list"];
                                     ?>

                                    <tr>
                                        <td><?php echo $appointment_id ?></td>
                                        <td><?php echo $ser_id ?></td>
                                        <td><?php echo $cus_id?></td>
                                        <td><?php echo $cus_name?></td>
                                        <td><?php echo $cus_email?></td>
                                        <td><?php echo $cus_phoneno?></td>
                                        <td><?php echo $date ?></td>
                                        <td><?php echo $time ?></td>
								</tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                    </div>
                </div>
                

            </div>
        </div>
</div>


