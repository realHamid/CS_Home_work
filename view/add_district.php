<?php require_once( '_config.php' )?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php  require_once("_header.php");$title = 'ولسوالی '; ?>
    <title>ثبت  <?php echo $title ?> </title>
</head>
<body>
<div id="wrapper" class="wrapper animsition">
    <!-- Navigation -->
    <?php  require_once("_nav.php"); ?>
    <!-- / Sideer -->
    <?php
    $menu = "DISTRICT";
    $subMenu = 'ADD';
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
                    <h1 class="bfont"> ثبت <?php echo  $title?>  </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"> خانه  </a></li>
                        <li class="active">ثبت <?php echo $title?> </li>
                    </ol>
                </div>
            </div> <!-- /. Content Header (Page header) -->

            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <div class="panel panel-inverse lobidisable">

                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5 class="bfont"  > این صفحه برای ثبت <?php echo $title ?> جدید است </h5>
                            </div>
                        </div>

                        <div class="panel-body">
                            <br />

                            <form id="validation-form" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="action_district.php">

                                <input type="hidden" name="insertion" value="1">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3" for="photo">عکس  <span class="required"></span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-6">
                                        <label id="upload">
                                            <input type="file" name="photo" class="form-control" style="width:100%">
                                        </label>
                                    </div>
                                </div><br>

                                <div class="item form-group " >
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="province_id">  ولایت     <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <select class="basic-single form-control"  dir="rtl" name="province_id" id="province_id" required>
                                            <option value=""> یکی راه انتخاب کنید  </option>
                                            <?php

                                            $view_slider = $db->query("SELECT * FROM provinces ORDER BY id DESC ");
                                            foreach ( $view_slider as $row) {
                                                echo  ' <option value="'.$row['id'].'" >  '.$row['name'].'  </option> ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="name">    نام ولسوالی    <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <input type="text" id="name" name="name" required="required" class="form-control cfont" placeholder="نام ولسوالی را وارد کنید ">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="date"> تاریخ  ثبت <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <input type="text" id="date" name="date" required="required" class="form-control date" value="<?php echo date('Y-m-d') ?> ">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="note"> نوت <span class=""></span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <textarea id="note" name="note" class="form-control" rows="5" style="width:100%;height:40%;overflow-x:auto;" placeholder=""></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <button type="submit" class="btn btn-inverse w-md m-b-5 bfont" name = "submit"> &nbsp;<i class="fa fa-clone"> </i>&nbsp;&nbsp;  اضافه کردن  &nbsp;</button>
                                        <button type="reset" class="btn btn-danger w-md m-b-5 bfont"> &nbsp; <i class="fa fa-refresh"> </i>&nbsp;&nbsp;  لغو </button>
                                    </div>
                                </div>
                            </form>
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
