<?php require_once( '_config.php' )?>
<!DOCTYPE html>
<html lang="en">

<?php 
    if (isset($_GET['id'])) {
        $id        = base64_decode($_GET['id']);
        $sql = $db->query("SELECT * FROM `sliders` WHERE `id` = '$id' AND `deleted` = '0'");
        $row = $sql->fetch_array();
    }
?>

<head>
    <?php  require_once("_header.php"); ?>  
    <title>ثبت ادمین</title>
</head>

<body>

    <div id="wrapper" class="wrapper animsition">
        <!-- Navigation -->
        <?php  require_once("_nav.php"); ?>
        <!-- / Sideer -->
        <?php require_once("_sidebar.php");?>
        
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
                            <li><a href="add_slider">سلایدر</a></li>
                            <li class="active">ویرایش سلایدر</li>
                        </ol>
                    </div>
                </div> <!-- /. Content Header (Page header) -->
                
                <div class="row">
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="panel panel-inverse lobidisable">
                            
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h5 class="bfont"  > این صفحه برای ویرایش سلایدر است </h5>
                                </div>
                            </div>

                            <div class="panel-body">    
                                <br />

                                <form id="validation-form" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="action_slider.php">    


                                    <input type="hidden" id="id" name="id" value="<?php echo base64_encode($id);?>" class="form-control col-md-7 col-xs-12">   
                                    <input type="hidden" value="<?php echo $row['photo']; ?>" name="lastphoto">  

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="user_id"> یوزر آیدی <span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <input type="number" id="user_id" name="user_id" value="<?php echo $row['user_id'];?>" required="required" class="form-control cfont">
                                        </div>
                                    </div>         

                                     <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">عکس قبلی<span class="required"></span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <img style="width: 150px;" src="<?php echo $row['photo'];?>" class="thumbnail">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" id="upload" for="file_chooser"> عکس جدید <span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <input type="file" id="file_chooser" name="photo" class="form-control" placeholder="">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3" for="date"> تاریخ  ثبت <span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <input type="text" id="date" name="date" required="required" value="<?php echo $row ['date'];?>" class="form-control date">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="note"> نوت <span class=""></span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <textarea id="note" name="note" class="form-control" rows="5" style="width:100%;height:40%;overflow-x:auto;" placeholder=""><?php echo $row ['note'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <button type="submit" class="btn btn-primary w-md m-b-5 bfont" name = "edit"> &nbsp;<i class="fa fa-edit"> </i> ویرایش کردن </button>
                                            <button type="reset" class="btn btn-warning w-md m-b-5 bfont"> &nbsp; <i class="fa fa-refresh"> </i> لغو ویرایش </button>
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


