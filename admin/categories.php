<?php include"includes/admin_header.php"; ?>

   
    <div id="wrapper">
        
        <!-- navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row" style="padding-top:20px;">
                    <div class="col-lg-12">
              
                        <div class="col-xs-6">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_name">Add Categories</label>
                                    <input class="form-control" type="text" name="cat_name">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                                </div> 
                            </form>
                        </div>
                        
                            <!--add cat function-->
                        <?php 
                            if(isset($_POST['submit'])) {

                                $cat_name = $_POST['cat_name'];
                                if($cat_name=="" || empty($cat_name)) {
                                    echo "<script type='text/javascript'>
			                         alert('Please fill out the form');
                                    window.location='../admin/categories.php';
                                    </script>";
                                }
                            else{

                                $query = "INSERT INTO categories(cat_name) VALUE ('$cat_name')";
                                $create_category = mysqli_query($connection,$query);

                                if(!$create_category) {
                                    die("Query Failed");
                                    }
                                }
                            }
                            ?>
                             
                            <?php
                                if (isset($_GET['delete'])) {
                                    $cat_del_id = $_GET['delete'];

                                    $query = "DELETE FROM categories WHERE cat_id=$cat_del_id";

                                    $delete_cat = mysqli_query($connection,$query);
                                }
                            ?>
                        <!--display cat at same page in table way-->
                        <div class="col-xs-6">
                        <?php 
                            $query = "SELECT *  FROM  categories";
                            $display_categories = mysqli_query($connection,$query);
                        ?>

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php  
                                        while($row = mysqli_fetch_assoc($display_categories)) {
                                        $cat_id = $row['cat_id'];
                                        $cat_name = $row['cat_name'];

                                        echo "<tr>";
                                        echo "<td> {$cat_id} </td>";
                                        echo "<td> {$cat_name} </td>";
                                        echo "<td><a href='categories.php?delete=$cat_id'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
       
</div>
