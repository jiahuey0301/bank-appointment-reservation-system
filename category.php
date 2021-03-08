<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
<!-- navigation -->
<?php include "includes/navigation.php"; 

		  if ($_SESSION['s_cus_id'] !=""){
            $curr_cus_id = $_SESSION['s_cus_id'];
            $query = "SELECT * FROM customers where cus_id = $curr_cus_id";

            $select_user = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_user)) {
                $cus_name = $row['cus_name'];
                $cus_firstname = $row['cus_firstname'];
                $cus_lastname = $row['cus_lastname'];
                $cus_email = $row['cus_email'];
                $cus_phoneno = $row['cus_phoneno'];
		      }
		  }
?>
   
    <!-- content -->
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-8">
<!--get the service under cat that previous click and go next page-->
                <?php 

                    if (isset($_GET['category'])) {
                        $cat_type = $_GET['category'];
                    }

                    $query = "SELECT *  FROM  services WHERE type_cat_id=$cat_type";
                    $select_all_services = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_all_services)) {
                        $ser_name = $row['ser_name'];
                        $ser_id = $row['ser_id'];
                        ?>
                        
                           <h2 style="font-size:18pt;">
                            <?php echo $ser_name; ?>
                            </h2>
                            
                             <a class="btn btn-primary" href="app_details.php?ser_id=<?php echo $ser_id; ?>">Go  <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <?php } ?>      
					
                    </div>

                  </div>         

            </div>
      
    </div>
        

<?php include "includes/footer.php"; ?>