<?php
require_once( '_config.php' );?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php  require_once("_header.php"); ?>
    <title>  صفحه خانه  </title>
</head>

<body>

<div id="wrapper" class="wrapper animsition">
    <!-- Navigation -->
    <?php  require_once("_nav.php"); ?>
    <!-- / Sideer -->
    <?php

    $menu = "HOME";
    require_once("_sidebar.php");
    ?>

    <div class="control-sidebar-bg"></div>
    <!-- Page Content -->
    <div id="page-wrapper">
        <!-- main content -->
        <div class="content">

            <!-- Content Header (Page header) -->

            <div class="content-header">
                <div class="header-icon"><i class="pe-7s-note2"></i></div>

                <div class="header-title">
                    <h1 class="bfont">  صفحه خانه   </h1>
                    <ol class="breadcrumb">
                        <li class="active"> <a href="index.php"> خانه  </a></li>
                    </ol>
                </div>
            </div> <!-- /. Content Header (Page header) -->

            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <div class="panel panel-inverse lobidisable">

                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5 class="bfont"  > دسترسی کوتاه  </h5>
                            </div>
                        </div>

                        <div class="panel-body" style="min-height: 420px;" >
                            <br />
                            <div class="row" style="margin-top: 25px">

                                <div class="col-md-3 col-xs-12 col-sm-6">
                                    <a href="add_real_estate.php" style="text-align : center;" >
                                        <h3 class="bfont text-center" > املاک    </h3>
                                        <img src="assets/img/real_estal.png"  width="260px" style="margin-right: 30px;" alt="">
                                    </a>
                                </div>

                                <div class="col-md-3 col-xs-12 col-sm-6">
                                    <a href="add_province.php" style="text-align : center;" >
                                        <h3 class="bfont text-center" > ولایت     </h3>
                                        <img src="assets/img/province.jpg" width="260px" style="margin-right: 30px;" alt="">
                                    </a>
                                </div>

                                <div class="col-md-3 col-xs-12 col-sm-6">
                                    <a href="add_category.php" style="text-align : center;" >
                                        <h3 class="bfont text-center" > دسته بندی    </h3>
                                        <img src="assets/img/category.png" width="260px" style="margin-right: 30px;" alt="">
                                    </a>
                                </div>

                                <div class="col-md-3 col-xs-12 col-sm-6">
                                    <a href="add_user.php" style="text-align : center;" >
                                        <h3 class="bfont text-center" >  ادمین   </h3>
                                        <img src="assets/img/users.png" style="margin-right: 30px;" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- end main content   -->



        </div> <!-- /.main content -->
    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<!-- START CORE PLUGINS -->

<?php  require_once("_script.php"); ?>
</body>

</html>