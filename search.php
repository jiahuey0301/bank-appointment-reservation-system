<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
<!-- navigation -->
<?php include "includes/navigation.php"; ?>

<!-- content -->
<div class="container" style="padding-top:10px; padding-bottom:40px; ">

<?php include "includes/ser_details.php"; ?>
        <div class="row" style="padding-left:120px;" >
            <div class="col-md-16">
<?php 
				 
                if(isset($_POST['submit'])) {
                    $category = $_POST['category'];
                    
                    if ($category=="") {
                        echo "<script type='text/javascript'>
			alert('Please choose one category!');
            window.location='search.php';
		</script>";
                    }
                    else {
				        $pick_category = "SELECT ser_name,ser_desc,type_cat_id FROM services WHERE type_cat_id LIKE '%$category%' ";
					   
                        $pick_service = mysqli_query($connection,$pick_category);
                        while($row = mysqli_fetch_assoc($pick_service)) {
                            $ser_name = $row['ser_name'];
                            $ser_desc = $row['ser_desc'];       
?>

                           
                <div class="jumbotron" style="width:85%;">
                    <h2 style="text-align:left;"><?php echo $ser_name; ?></h2>
                        
                    <p style="text-align:left;">Service Description: <br><?php echo $ser_desc ?></p> 
                </div>
                             
            <hr style="width:85%;text-align:left;margin-left:0;">
                             
                <?php   
                    if(!$pick_service) {
                        die("Query Failed" . mysqli_error($connection));
                    } 
                ?>
                       
                <?php }  
                }
         }
                ?>
             </div>
    </div>
        <hr>
</div>

<?php include "includes/footer.php"; ?>