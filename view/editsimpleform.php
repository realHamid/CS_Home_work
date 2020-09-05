<?php require_once( '_config.php' )?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php  require_once("_header.php"); ?>  
    <title>  ویرایش این صفخه خالی است   </title>
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
                            <li><a href="index.html"> خانه  </a></li>
                            <li class="active">   ویرایش صفحه خانه    </li>
                        </ol>
                    </div>
                </div> <!-- /. Content Header (Page header) -->
                
                <div class="row">
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="panel panel-warning  lobidisable">
                            
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h5 class="bfont"  > این صفخه برای  خالی است  </h5>
                                </div>
                            </div>

                            <div class="panel-body">    
                                <br />

                                <form id="validation-form" class="form-horizontal form-label-left" method="post" action="tr_acb.php">                     
                                    
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="testP">  تکست <span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <input type="text" id="testP" name="testP" required="required" class="form-control" placeholder="">
                                            <div class="clearfix"></div>
                                        </div>
                                    
                                    </div>

                                    <div class="item form-group " >
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="cseelct"> سلیکت   <span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            
                                            <select class="basic-single form-control"  dir="rtl" name="cseelct" id="cseelct" required>
                                                <option> شمار اول  </option>
                                                <option> شمار دوم  </option>
                                                <option> شمار سوم  </option>
                                                <option> شمار چهارم   </option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="cnumber"> شماره  <span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <input type="number" id="cnumber" name="cnumber" required="required" class="form-control cfont" placeholder="Balance" value="0" step="any">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3" for="date"> تاریخ  پرداخت<span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <input type="text" id="date" name="date" required="required" class="form-control date" value="<?php echo date('Y-m-d') ?> ">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="Ctexyarea"> تکست اریاه <span class=""></span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <textarea id="Ctexyarea" name="Ctexyarea" class="form-control" rows="5" style="width:100%;height:40%;overflow-x:auto;" placeholder=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <button type="submit" class="btn btn-warning w-md m-b-5 bfont "> <i class="fa fa-edit"> </i>  اضافه کردن  </button>
                                            <button type="reset" class="btn btn-danger w-md m-b-5 bfont"> <i class="fa fa-arrow-left"> </i>  لغو </button>
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