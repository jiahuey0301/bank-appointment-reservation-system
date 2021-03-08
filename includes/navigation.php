<!--https://www.w3.org/WAI/GL/wiki/Using_aria-expanded_to_indicate_the_state_of_a_collapsible_element-->
<!--https://getbootstrap.com/docs/4.4/components/collapse/-->

<!--link and plug in jquery-->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   

<?php include"db.php" ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #182c39;" role="navigation">
      
       
        <div class="container">
            <!--better display in mobile -->
             
            <div class="navbar-header">
<!--               hamburger button-->

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index1.php">
                <img src="logo.png" alt="logo" style="height:auto; width:auto; max-height:30px; max-width:400px; background-size:contain;"></a>
            </div>
            <!-- dropdown menu when mobile display -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-right">

                   

                    <li>
                        <a href="user_manual.php">User Manual</a>
                    </li> 

                     <li>
                        <a href="service_categories.php">Make Appointment</a>
                    </li>
                    <li>
                        <a href="search.php">Services Detail</a>
                    </li>
                    

                    <?php 
                        if (isset($_SESSION['s_cus_name'])) {
                            
                            ?>
                            <li class="dropdown">
<!--put href to link what i want so click toggle it will show the content of link -->
                                <a href="#collapseExample" class="dropdown-toggle" id="toggleLink1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExample" onclick="toggle('collapseExample', 'toggleLink1')"><i class="fa fa-user"></i> 
                                <?php 

                                if(isset($_SESSION['s_cus_name']))
                                echo ucfirst($_SESSION['s_cus_name']); ?> 
<!--                                arrowicon-->
                                <b class="caret"></b></a>       
                                <ul class="dropdown-menu" id="collapseExample">
                                    <li>
                                        <a href="profile.php"><i class="fa fa-fw fa-user"></i> Account</a>
                                    </li>
<!--                                    separate link-->
                                    <li class="divider"></li>
                                    <li>
                                        <a href="includes/logout.php"><i class="fa fa-fw fa-sign-out"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            
                    <?php    }
                    ?>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
