<!--https://alloyui.com/examples/button/css3.html-->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<!-- navigation -->
<?php include "includes/navigation.php"; ?>

    <!-- content -->
    <div class="container" style="padding-bottom:20px;" >
       <div class="jumbotron" >
                   <h4 style="padding-bottom:10px;">Service Categories</h4>
                    <?php 

                        $query = "SELECT *  FROM  categories";
                        $type_categories = mysqli_query($connection,$query);

                     ?>
                    
                    <div class="row">
                        <div class="column">
                            <ul class="list-unstyled">
                                <?php  
                                    while($row = mysqli_fetch_assoc($type_categories)) {
                                        $cat_name = $row['cat_name'];
                                        $cat_id = $row['cat_id'];
                                         echo "<li><a class=btn href='category.php?category=$cat_id' style='color: black; font-size: 12pt;font-family: sans-serif'> $cat_name </a></li>";
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
        </div>
    </div>

<style>
.btn-group
{
    text-align: center;
    margin-top: 250px;
    display:list-item;
}

.btn
{
    border: 2px solid black;
    background-color: skyblue;
    padding: 20px 40px;
    font-size: 25px;
    font-family: "montserrat";
    font-weight: bold;
    cursor: pointer;
    margin-left: 120px;
    margin-top: 0px;
    position: relative;
    overflow: hidden;
    width: 750px !important;
}

.jumbotron
    {
        margin-left:30px; 
        padding-top:20px; 
        padding-bottom: 20px;
    }

@media screen and (max-width: 500px) {
  .column {
      width: 100%;
  }
}
    
</style>

		


<?php include "includes/footer.php"; ?>