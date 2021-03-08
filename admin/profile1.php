<!--https://www.w3schools.com/howto/howto_js_toggle_password.asp-->
<!--link to jquery and boostrap css-->
<?php include"includes/admin_header.php"; ?>

   
<div id="wrapper">
        
<!-- navigation -->
<?php include"includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

            <div class="container-fluid">
             <h3>Edit Details</h3>
              <br>
          <?php

            $curr_id = $_SESSION['s_id'];
            $query = "SELECT * FROM admin WHERE admin_id = $curr_id ";
            $pick_adm = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($pick_adm)) {
                $admin_username = $row['admin_username'];
                $admin_password = $row['admin_password'];
                $admin_firstname = $row['admin_firstname'];
                $admin_lastname = $row['admin_lastname'];
                $admin_phoneno = $row['admin_phoneno'];
                $admin_email = $row['admin_email'];  
            }

            if (isset($_POST['update'])) {
              $admin_username = $_POST['admin_username'];
              $admin_password = $_POST['admin_password'];
              $admin_firstname = $_POST['admin_firstname'];
              $admin_lastname = $_POST['admin_lastname'];
              $admin_phoneno = $_POST['admin_phoneno'];
              $admin_email = $_POST['admin_email'];



              $query = "UPDATE admin SET admin_username='{$admin_username}', admin_password='{$admin_password}', admin_firstname='{$admin_firstname}', admin_lastname='{$admin_lastname}', admin_phoneno='{$admin_phoneno}', admin_email='{$admin_email}' WHERE admin_id=$curr_id";
              
              $update = mysqli_query($connection,$query);
              if (!$update) {
                die("Query Failed" . mysqli_error($connection));
              }
                echo "<script type='text/javascript'>
			     alert('Successfully updated!');
                window.location='index.php';
		          </script>";
            }
            ?>

            <form action="" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="username">Admin username</label>
                <input value="<?php echo $admin_username; ?>" type="text" class="form-control" name="admin_username">
              </div>

              <div class="form-group">
                <label for="firstname">Firstname</label>
                <input value="<?php echo $admin_firstname; ?>" type="text" class="form-control" name="admin_firstname">
              </div>

              <div class="form-group">
                <label for="lastname">Lastname</label>
                <input value="<?php echo $admin_lastname; ?>" type="text" class="form-control" name="admin_lastname">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input value="<?php echo $admin_email; ?>" type="email" class="form-control" name="admin_email">
              </div>

              <div class="form-group">
                <label for="phoneno">PhoneNo</label>
                <input value="<?php echo $admin_phoneno; ?>" type="text" class="form-control" name="admin_phoneno">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input value="<?php echo $admin_password?>" id="myInput" type="password" class="form-control" name="admin_password">
              </div>

              <div class="form-group">
                <input type="checkbox" onclick="myFunction()"> Show Password
              </div>

             

              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="update" value="Update">
              </div>
            </form>
            </div>
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
</script>