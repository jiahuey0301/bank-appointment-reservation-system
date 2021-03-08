<?php include"includes/admin_header.php"; ?>

    <div id="wrapper" >
        
        <!-- navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper" >
            <div class="container-fluid">
                <!-- like a banner -->
                <div class="row"  >
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align:center; font-weight:bold; padding-top:100px;">
                            Welcome, Mr/Mrs
                            <small><?php echo ($_SESSION['s_username']);   ?></small>
                        </h1>
                    </div>
                </div>
               

            </div>
        </div>
</div> 

