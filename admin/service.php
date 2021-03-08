<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
    <!-- navigation -->
    <?php include"includes/admin_navigation.php"; ?>
        
        <div id="page-wrapper">
            <div class="container-fluid">
            <!--button in table to link to modify and delete -->
                <div class="row">
                    <div class="col-lg-12">
        
                    <?php 
                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }
                        
                        switch ($source) {
                            case 'add_service':
                                include "includes/add_service.php";
                                break;
                            
                            case 'update':
                                include "includes/modify_service.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover"> 
                                <thead>
                                    <tr>
                                        <th>Service_Id</th>
                                        <th>Admin_Name</th>
                                        <th>Service_Name </th>
                                        <th>Type_Category</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php 
								        $query = "SELECT *  FROM  services ";		
                                        $result = mysqli_query($connection ,$query);
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $ser_id = $row["ser_id"];
                                            $ser_author = $row["ser_author"];
                                            $ser_name = $row["ser_name"];
                                            $type_cat_id = $row["type_cat_id"];
                                            $date = $row["date_posted"];
                                ?>
									
                                    <tr>
                                        <td><?php echo $ser_id ?></td>
                                        <td><?php echo $ser_author ?></td>
                                        <td><?php echo $ser_name ?></td>
                                        <td><?php echo $type_cat_id ?></td>
                                        <td><?php echo $date ?></td>
                                        <?php echo "<td><a href='service.php?source=update&ser_id=$ser_id'>Modify</a></td>";  ?>
                                        <?php echo "<td><a href='service.php?delete=$ser_id'>Delete</a></td>"; ?>
                                    </tr>
                                    
                             <?php }  ?>
                                </tbody>
                                </table>
                            <?php
                                break;
                            } 
                            ?>

                        <?php 

                        if (isset($_GET['delete'])) {
                            
                            $ser_id = $_GET['delete'];
                           
                            $query = "DELETE FROM services WHERE ser_id = $ser_id";
                            $delete_bus = mysqli_query($connection,$query);
                            if(!$delete_bus) {
                                die("Query Failed" . mysqli_error($delete_bus));
                            }
							
                            header("Location: service.php");
                        }

                        ?>
                    </div>
                </div>
              
            </div>
          
    </div>
</div>      

