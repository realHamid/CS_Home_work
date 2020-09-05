<?php require_once( '_config.php' )?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php  require_once("_header.php"); ?>  
    <title> این صفخه خالی است  </title>
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
                            <li class="active"> صفحه خانه    </li>
                        </ol>
                    </div>
                </div> <!-- /. Content Header (Page header) -->
                
                <div class="row">
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="panel panel-inverse lobidisable">
                            
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
                                            <button type="submit" class="btn btn-inverse w-md m-b-5"> <i class="fa fa-clone"> </i>  اضافه کردن  </button>
                                            <button type="reset" class="btn btn-danger w-md m-b-5"> <i class="fa fa-refresh"> </i>  لغو </button>
                                        </div>
                                    </div>

                                </form>


                            </div>

                        </div>
                    </div>

                </div><!-- end main content   -->

                <!-- start table  -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4 class="bfont" >    جدول نمایش دیتا  </h4>
                                </div>
                            </div>
                            
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        
                                    <thead>
                                            <tr>
                                                <th>Select</th>
                                                <th>Order ID</th>
                                                <th>Fell Name </th>
                                                <th>Email </th>
                                                <th>Place Date</th>
                                                <th>Pickup Date </th>
                                                <th>Delivery Date</th>
                                                <th>Status </th>
                                                <th>Price </th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>JS325</td>
                                                <td>Naeem Khan</td>
                                                <td><a href="http://thememinister.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bcd2ddd9d9d1fcdbd1ddd5d092dfd3d1">[email&#160;protected]</a></td>
                                                <td>30.05.1016</td>
                                                <td>10.06.2016</td>
                                                <td>10.06.2016</td>
                                                <td>Complete</td>
                                                <td>$43</td>
                                                <td>
                                                    <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td>JS325</td>
                                                <td>Naeem Khan</td>
                                                <td><a href="http://thememinister.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8cd8e4e9e1e9e1e5e2e5fff8e9feccebe1ede5e0a2efe3e1">[email&#160;protected]</a></td>
                                                <td>30.05.1016</td>
                                                <td>10.06.2016</td>
                                                <td>10.06.2016</td>
                                                <td>Complete</td>
                                                <td>$43</td>
                                                <td>
                                                    <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td>JS325</td>
                                                <td>Mark</td>
                                                <td><a href="http://thememinister.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8dece9e0e4e3cdeae0ece4e1a3eee2e0">[email&#160;protected]</a></td>
                                                <td>30.05.1016</td>
                                                <td>10.06.2016</td>
                                                <td>10.06.2016</td>
                                                <td>Complete</td>
                                                <td>$43</td>
                                                <td>
                                                    <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox4" type="checkbox">
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                </td>
                                                <td>JS325</td>
                                                <td>Abraham</td>
                                                <td><a href="http://thememinister.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3c2c7cecacde3c4cec2cacf8dc0ccce">[email&#160;protected]</a></td>
                                                <td>30.05.1016</td>
                                                <td>10.06.2016</td>
                                                <td>10.06.2016</td>
                                                <td>Complete</td>
                                                <td>$43</td>
                                                <td>
                                                    <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox5" type="checkbox">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td>JS325</td>
                                                <td>Colleen Hurst</td>
                                                <td><a href="http://thememinister.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f796939a9e99b7909a969e9bd994989a">[email&#160;protected]</a></td>
                                                <td>30.05.1016</td>
                                                <td>10.06.2016</td>
                                                <td>10.06.2016</td>
                                                <td>Complete</td>
                                                <td>$43</td>
                                                <td>
                                                    <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox6" type="checkbox">
                                                        <label for="checkbox6"></label>
                                                    </div>
                                                </td>
                                                <td>JS325</td>
                                                <td>Ashton Cox</td>
                                                <td><a href="http://thememinister.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d7c797074735d7a707c7471337e7270">[email&#160;protected]</a></td>
                                                <td>30.05.1016</td>
                                                <td>10.06.2016</td>
                                                <td>10.06.2016</td>
                                                <td>Complete</td>
                                                <td>$43</td>
                                                <td>
                                                    <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- /.main content -->
        </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- START CORE PLUGINS -->

    <?php  require_once("_script.php"); ?>
</body>

</html>