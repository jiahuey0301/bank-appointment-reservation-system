<!--https://www.w3schools.com/bootstrap/bootstrap_navbar.asp-->
<!--https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp#:~:text=To%20create%20a%20collapsible%20navigation,the%20button%3A%20%22thetarget%22.-->
<meta name="viewport" content="width=device-width, initial-scale=1">
 
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #142433;">
            <!-- mobile better display -->
            <div class="navbar-header">
                <a class="navbar-brand mx-auto" href="index.php" style="text-align:center;">Online Bank Appointment System</a>
            </div>
            
            <!-- navigation menu for account -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ($_SESSION['s_username']); ?> <b class="caret"></b></a>
                    
            <!--sub-item under nv menu-->
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile1.php"><i class="fa fa-fw fa-user"></i> Account</a>
                        </li>
                        <li>
                            <a href="includes/logout1.php"><i class="fa fa-fw fa-sign-out"></i> Log Out</a>
                        </li>
                    </ul>     
                </li>
            </ul>
            
            <!-- side bar -->
            <div class="collapse navbar-collapse navbar-ex1-collapse"  >
                <ul class="nav navbar-nav side-nav" >

                     <li>
                        <a href="categories.php"><i class="fa fa-fw fa-ellipsis-v"></i> Categories</a>
                    </li>
                      
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-list"></i> Service <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse" style="padding-top:0px;padding-bottom:0px;">
                                <li>
                                    <a href="service.php">All service</a>
                                </li>
                                <li>
                                    <a href="service.php?source=add_service">Add Services</a>
                                </li>
                            </ul>
                    </li>
     
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#order"><i class="fa fa-fw fa-calendar"></i> Appointment<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="order" class="collapse" style="padding-top:0px;padding-bottom:0px;">
                            <li>
                                <a href="admin_appo_record.php">Coming Appointment</a>
                            </li>
                            <li>
                                <a href="admin_appo_record1.php">Past Appointment</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#graph"><i class="fa fa-fw fa-bar-chart"></i> Graph<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="graph" class="collapse" style="padding-top:0px;padding-bottom:0px;">
                           <li>
                                <a href="graph1.php"> All appointment for category</a>
                            </li>
                             <li>
                                <a href="graph2.php"> All appointment for services</a>
                             </li>
                        </ul>
                    </li>
                     
                </ul>
            </div>
           
        </nav>