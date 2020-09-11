<?php require_once( '_config.php' )?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php  require_once("_header.php");$title = 'املاک'; ?>
    <title>لیست <?php echo $title?></title>
</head>
<body>
<div id="wrapper" class="wrapper animsition">
    <!-- Navigation -->
    <?php  require_once("_nav.php"); ?>
    <!-- / Sideer -->
    <?php
    $menu = "REAL_ESTATES";
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
                                            <th class="text-center">عکس</th>
                                            <th class="text-center">مقدار پول </th>
                                            <th class="text-center">نوعیت</th>
                                            <th class="text-center">ولایت</th>
                                            <th class="text-center">نام صاحب </th>
                                            <th class="text-center">شماره صاحب</th>
                                            <th class="text-center">عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $count = 1;
                                    $sql = $db->query("SELECT * FROM real_estates order by id desc  ");
                                    $status = ['payment' => 'فروشی' , 'rent' => 'کرای' , 'hostage' => 'گروی'];
                                    if($sql->rowCount()>0){
                                        while ($row = $sql->fetch()) {

                                            $province_id   = $row['province_id'];
                                            $province_name = $db->query("SELECT * FROM  provinces WHERE id = $province_id limit 1 ")->fetch()['name'];

                                            echo '
                                                <tr class="active">
                                                    <td class ="text-center">'.$count++.'</td>
                                                    <td class ="text-center"><img src="'.$row['img'].'" alt="../upload/user/default.png" style="width:40px;height:40px;"></td>
                                                    <td class ="text-center">'.$row['amount'].'</td>
                                                    <td class ="text-center">'.$status[$row['type']].'</td>
                                                    <td class ="text-center">'.$province_name.'</td>
                                                    <td class ="text-center">'.$row['owner_name'].'</td>
                                                    <td class ="text-center">'.$row['owner_number'].'</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-info btn-sm" href="edit_real_estate.php?id='.base64_encode($row['id']).'" ><i class="fa  fa-edit"></i></a>
                                                        <a class="btn btn-danger btn-sm deleted" href="action_real_estate.php?delete&id='.base64_encode($row['id']).'" ><i class="fa  fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            ';
                                        }
                                    }else{
                                        echo "
                                            <tr>
                                                <td colspan='12' class='alert alert-danger' > کدام ولایت  به سیستم اضافه نشده است.  </td>
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
