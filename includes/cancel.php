<?php include "db.php"; ?>
<?php include "header.php"; ?>
 
       
    <!-- Navigation -->
    <?php include "navigation.php"; ?>

    <!-- Content -->
     <div class="container " style="width: 54%; margin-top:50px; "> 

    <?php

    	if (isset($_GET['appointment_id'])) {
    		$pick_id_appo = $_GET['appointment_id'];
            $ser_id = $_GET['ser_id'];

    		$query = "DELETE FROM appointment WHERE appointment_id=$pick_id_appo";

    		$cancel_appo = mysqli_query($connection,$query);

    		if (!$cancel_appo) {
    			die("Query Failed".mysqli_error($connection));
    		}
    	}



    ?>

    <div class="container" style="width: 50%; margin-top:50px;">
        <br>
        <br>
        <br>
    	<p><h3>Cancel successfully</h3><p>
    	<br>
        <p><h3>Make another appointment!!</h3><p>

    </div>
        <hr>
	<?php header( "refresh:1;url=../service_categories.php" ); ?>

</div>
