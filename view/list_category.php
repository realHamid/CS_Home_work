<?php require_once( '_config.php' )?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php  require_once("_header.php");$title = 'دسته بندی '; ?>
    <title>لیست <?php echo $title?></title>
</head>
<body>
<div id="wrapper" class="wrapper animsition">
    <!-- Navigation -->
    <?php  require_once("_nav.php"); ?>
    <!-- / Sideer -->
    <?php
    $menu = "CATEGORY";
    $subMenu = 'LIST';
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
                    <h1 class="bfont">  لیست <?php echo $title?>   </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">خانه </a></li>
                        <li class="active">لیست  <?php echo $title?></li>
                    </ol>
                </div>
            </div> <!-- /. Content Header (Page header) -->

            <!-- start table  -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4 class="bfont" >    جدول نمایش <?php echo $title?>   </h4>
                            </div>
                        </div>

                        <div class="">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">شماره</th>
                                        <th class="text-center">نام دسته بندی </th>
                                        <th class="text-center">تاریخ ثبت</th>
                                        <th class="text-center">نوت</th>
                                        <th class="text-center">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $count = 1;
                                    $sql = $db->query("SELECT * FROM categories order by id desc  ");
                                    if($sql->rowCount()>0){
                                        while ($row = $sql->fetch()) {
                                            echo '
                                                <tr class="active">
                                                    <td class ="text-center">'.$count++.'</td>
                                                    <td class ="text-center">'.$row['name'].'</td>
                                                    <td class ="text-center">'.$row['date'].'</td>
                                                    <td class ="text-center">'.$row['note'].'</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-info btn-sm" href="edit_category.php?id='.base64_encode($row['id']).'" ><i class="fa  fa-edit"></i></a>
                                                        <a class="btn btn-danger btn-sm deleted" href="action_category.php?delete&id='.base64_encode($row['id']).'" ><i class="fa  fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            ';
                                        }
                                    }else{
                                        echo "
                                            <tr>
                                                <td colspan='12' class='alert alert-danger' > کدام دسته بندی  به سیستم اضافه نشده است.  </td>
                                            </tr>
                                        ";
                                    }
                                    ?>
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
