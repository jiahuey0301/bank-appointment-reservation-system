<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="admin">Admin</label>
		<input type="text" class="form-control" name="admin">
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
		<input type="text" class="form-control" name="ser_name">
	</div>

	<div class="form-group">
		<label for="date">Current Date</label>
		<input type="date" style="margin-top: 10px;" min=<?php echo date('Y-m-d');?> max=<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 365 days'));?> name="date" class="form-control" id="date" placeholder="yyyy/mm/dd" >
	</div>
	
	<div class="form-group">
		<label for="ser_desc">Service Description</label>
		<textarea class="form-control" name="ser_desc" cols="30" rows="10"></textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="add_ser" value="Add service">
	</div>
</form>

<?php 

	if (isset($_POST['add_ser'])) {
		
		$admin = $_POST['admin'];
		$type_cat = $_POST['type_cat'];
		$ser_name = $_POST['ser_name'];		
		$date = $_POST['date'];
		$ser_desc = $_POST['ser_desc'];
		
		if ($admin=="" || $type_cat=="" || $ser_name=="" || $date=="" || $ser_desc=="") {
			echo "<script type='text/javascript'>
			alert('Please fill out the form');
            window.location='service.php?source=add_service';
		</script>";
		}
		else {
			$query = "INSERT INTO services(type_cat_id, ser_name, ser_author, date_posted, ser_desc) VALUES('$type_cat', '$ser_name', '$admin', '$date', '$ser_desc')";
			
			$ser_entry = mysqli_query($connection,$query);
                echo "<script type='text/javascript'>
			     alert('Successfully added');
                window.location='service.php';
		      </script>";
            
			if (!$ser_entry) {
				die("Query Failed");
			}
            
			
		}
	}

?>


