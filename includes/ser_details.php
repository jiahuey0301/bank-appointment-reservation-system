       <div class="col-md-auto" style="padding-left:100px;">

                <!-- Search service jumbotron -->
                <div class="jumbotron"  >
                    <h4>Search the specific service based on the categories</h4>
                    <form action="search.php" method="post">

                        
							<select class="form-control" name="category"  style="width:100%;" data-validation="required">
								<option value="" >Categories name</option>
								<?php
						
								$pick_value="SELECT DISTINCT cat_name,cat_id FROM categories";
                                $result = mysqli_query($connection ,$pick_value);
                                
								while($row = mysqli_fetch_assoc($result))
									{?>
								<option value="<?php echo $row["cat_id"]; ?>"><?php echo $row["cat_name"]; ?></option>
									 <?php
									}
								?>
							</select>
							<br/>
							
                            <button class="btn btn-primary" name="submit" >Search</button>
                        
                    </form>
                    <!-- input  -->
                </div>
                    
                </div>
                
<!--for service details-->
<style>

.col-md-auto 
    {
        padding-left:100px;
        padding-right:100px;
    }
    
.jumbotron
    {
        
        padding-top: 20px;
        text-align: center;
        padding-bottom: 25px;
        
    }

h4
    {
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    
.btn btn-primary
    {
        text-align: center;
        margin-left: 130px; 
        margin-top: 10px;
    }
</style>


          