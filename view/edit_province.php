<?php require_once( '_config.php' )?>

<?php
if (!empty($_GET['id']) ) {
    $id = base64_decode($_GET['id']);
    $sql = $db->query("SELECT * FROM `provinces` WHERE `id` = '$id'  limit 1 " );
    $row = $sql->fetch();
}else {
    header("location: add_province.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php  require_once("_header.php");$title = 'ولایت'; ?>
    <title> ویرایش <?php echo $title; ?>   </title>
</head>

<body>

<div id="wrapper" class="wrapper animsition">
    <!-- Navigation -->
    <?php  require_once("_nav.php"); ?>
    <!-- / Sideer -->
    <?php
    $menu    = "PROVINCE";
    $subMenu = "LIST";
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
                    <h1 class="bfont">  ویرایش <?php echo $title; ?> </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">خانه </a></li>
                        <li class="active">ویرایش <?php echo $title; ?></li>
                    </ol>
                </div>
            </div> <!-- /. Content Header (Page header) -->

            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <div class="panel panel-success lobidisable">

                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5 class="bfont"  > این صفحه برای ویرایش <?php echo $title; ?> است </h5>
                            </div>
                        </div>

                        <div class="panel-body">
                            <br />

                            <form id="validation-form" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="action_province.php">

                                <input type="hidden" name="id" value="<?php echo base64_encode($id) ?>">
                                <input type="hidden" value="<?php echo $row['image']; ?>" name="lastphoto">
                                <input type="hidden" name="edit">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">عکس قبلی<span class="required"></span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img alt="بدون عکس " style="width: 150px;" src="<?php if(isset($row['image'])) echo $row['image']; ?>"   class="thumbnail">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3" for="photo">عکس  <span class="required"></span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-6">
                                        <label id="upload">
                                            <input type="file" name="photo" class="form-control" style="width:100%">
                                        </label>
                                    </div>
                                </div><br>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="name">    نام ولایت   <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <input type="text" id="name" name="name" value="<?php if(isset($row['name'])) echo $row['name'] ?>" required="required" class="form-control cfont" placeholder="نام ولایت را وارد کنید ">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="date"> تاریخ  ثبت <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <input type="text" id="date" name="date" required="required" class="form-control " value="<?php if(isset($row['date'])) echo $row['date'] ?> ">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="note"> نوت <span class=""></span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <textarea id="note" name="note" class="form-control" rows="5" style="width:100%;height:40%;overflow-x:auto;" placeholder=""><?php if(isset($row['note'])) echo $row['note'] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <button type="submit" class="btn btn-warning w-md m-b-5 bfont"> &nbsp;<i class="fa fa-edit"> </i> ویرایش کردن </button>
                                        <a href="list_province.php" class="btn btn-danger w-md m-b-5 bfont"> &nbsp; <i class="fa fa-arrow-left"> </i> لغو ویرایش </a>
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