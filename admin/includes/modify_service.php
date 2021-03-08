<!--modify the service function by admin-->
<?php

    if (isset($_GET['ser_id'])) {
	   $modify_ser_id = $_GET['ser_id'];
    }

    $query = "SELECT *  FROM  services WHERE ser_id=$modify_ser_id";
    $pick_service = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($pick_service)) {
        $ser_id = $row['ser_id'];
        $admin = $row['ser_author'];
        $ser_name = $row['ser_name'];
        $type_cat = $row['type_cat_id'];
        $ser_desc = $row['ser_desc'];
        $date_posted = $row['date_posted'];
    
    }

    if (isset($_POST['modify'])) {
	
	   $admin = $_POST['admin'];
	   $type_cat = $_POST['type_cat'];
	   $ser_name = $_POST['ser_name'];
	   $date = $_POST['date'];
	   $ser_desc = $_POST['ser_desc'];
	
	       if ($admin=="" || $type_cat=="" || $ser_name=="" || $date=="" ||  $ser_desc=="" ) {
			     echo "<script type='text/javascript'>
			     alert('Please fill out the form');
                 window.location='service.php?source=update&ser_id=$modify_ser_id';
		          </script>";
		      }
	   else{
	       $query = "UPDATE services SET ser_name='{$ser_name}', date_posted='{$date}', ser_author='$admin', type_cat_id={$type_cat},  ser_desc='{$ser_desc}' WHERE ser_id=$modify_ser_id ";

	       $update_service = mysqli_query($connection,$query);
	
            echo "<script type='text/javascript'>
			alert('Successfully updated');
            window.location='service.php';
		      </script>";
        
	
	   if (!$update_service) {
		  die("Query Failed" . mysqli_error($connection));
	   }
	}
}

?>


<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="admin">Admin</label>
		<input value="<?php echo $admin; ?>" type="text" class="form-control" name="admin">
	</div>

	<div class="form-group">
		<select name="type_cat">
			
			<?php 

			$query = "SELECT * FROM categories";
			$pick_categories = mysqli_query($connection,$query);

			if (!$pick_categories) {
				die("Query Failed" . mysqli_error($connection));
			}

			while ($row = mysqli_fetch_assoc($pick_categories)) {
				$cat_id = $row['cat_id'];
				$cat_name = $row['cat_name'];
			
				echo "<option value='$cat_id'>$cat_name</option>";
			}

			?>

		</select>
	</div>

	<div class="form-group">
		<label for="ser_name">Service Name</label>
		<input value="<?php echo $ser_name; ?>" type="text" class="form-control" name="ser_name">
	</div>

	<div class="form-group">
		<label for="date">Date</label>
		<input value="<?php echo $date ?>" type="date" style="margin-top: 10px;" min=<?php echo date('Y-m-d');?> max=<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 365 days'));?> name="date" class="form-control" id="date" placeholder="<?php echo $date ?>" >
	</div>
	
	<div class="form-group">
		<label for="bus-detail">Service Description</label>
		<textarea value="<?php echo $ser_desc; ?>" class="form-control" name="ser_desc" cols="30" rows="10"><?php echo $ser_desc; ?></textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="modify" value="Modify">
	</div>
</form>
