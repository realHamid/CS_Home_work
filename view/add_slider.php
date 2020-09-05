<?php require_once( '_config.php' )?>
<!DOCTYPE html>
<html lang="en">

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
                            <li class="active">ثبت سلایدر</li>
                        </ol>
                    </div>
                </div> <!-- /. Content Header (Page header) -->
                
                <div class="row">
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="panel panel-inverse lobidisable">
                            
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h5 class="bfont"  > این صفحه برای ثبت سلایدر جدید است </h5>
                                </div>
                            </div>

                            <div class="panel-body">    
                                <br />

                                <form id="validation-form" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="action_slider.php">    


                                    <input type="hidden" id="id" name="id"  class="form-control col-md-7 col-xs-12">     

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="user_id"> یوزر آیدی <span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <input type="number" id="user_id" name="user_id" value="1" required="required" class="form-control cfont">
                                        </div>
                                    </div>         

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" id="upload" for="file_chooser"> عکس <span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                            <input type="file" id="file_chooser" name="photo" class="form-control" placeholder="">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3" for="date"> تاریخ  ثبت <span class="required">*</span></label>
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
                                            <button type="submit" class="btn btn-inverse w-md m-b-5 bfont" name = "submit"> &nbsp;<i class="fa fa-clone"> </i>  اضافه کردن  </button>
                                            <button type="reset" class="btn btn-danger w-md m-b-5 bfont"> &nbsp; <i class="fa fa-refresh"> </i>  لغو </button>
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
                                                <th class="text-center">شماره</th>
                                                <th class="text-center">یوزر آیدی</th>
                                                <th class="text-center">عکس</th>
                                                <th class="text-center">تاریخ</th>
                                                <th class="text-center">یادداشت</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                  <?php
                                                           $count = 1;
                                                            $sql = $db->query("SELECT * FROM sliders where deleted ='0' order by id desc  limit 10");
                                                                    if($sql->num_rows>0){
                                                                        while ($row = $sql->fetch_array()) {
                                                                echo '
                                                                    <tr class="active">
                                                                        <td class = "text-center">'.$count++.'</td>
                                                                        <td class ="text-center">'.$row['user_id'].'</td>
                                                                        <td class ="text-center"><img src="'.$row['photo'].'" style="width:60px;height:60px;">   </td> 
                                                                        <td class ="text-center"> '.$row['date'].'</td>
                                                                        <td class ="text-center"> '.$row['note'].'</td>
                                                                        <td class="text-center">



                                                                        <a class="btn btn-info btn-sm" href="edit_slider.php?id='.base64_encode($row['id']).'" ><i class="fa  fa-edit"></i></a>
                                                                        <a  class="btn btn-danger btn-sm" href="action_slider.php?delete&id='.base64_encode($row['id']).'" ><i class="fa  fa-trash-o"></i></a>
                                                                                                       </td>
                                                                    </tr>
                                                                ';
                                                            }
                                                                   }else{

                                                        }                           ?>
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


