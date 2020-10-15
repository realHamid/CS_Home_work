<?php

    require_once( '_config.php' );

    if(isset($_POST['search'])){

        $condition = '';

        if(!empty($_POST['province_id'])){
            $province_id = VD($_POST['province_id']);
            $condition = " AND province_id = '$province_id'  ";
        }

        if(!empty($_POST['district_id'])){
            $district_id = VD($_POST['district_id']);
            $condition = " AND district_id = '$district_id'  ";
        }

        if(!empty($_POST['category_id'])){
            $category_id = VD($_POST['category_id']);
            $condition = " AND category_id = '$category_id'  ";
        }

        if(!empty($_POST['type'])){
            $type = VD($_POST['type']);
            $condition = " AND type = '$type'  ";
        }

        if(!empty($_POST['owner_name'])){
            $owner_name = VD($_POST['owner_name']);
            $condition = " AND owner_name like '%$owner_name%'  ";
        }

        if(!empty($_POST['owner_email'])){
            $owner_email = VD($_POST['owner_email']);
            $condition = " AND owner_email = '$owner_email'  ";
        }

        $sql = $db->query("SELECT * FROM real_estates where id != 'null' $condition order by id desc  ");

    }else {
        $sql = $db->query("SELECT * FROM real_estates order by id desc  ");
    }


    ?>
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

            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <div class="panel panel-info lobidisable">

                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5 class="bfont"  >  برای جستجو مشخصات را وارد کنید.   </h5>
                            </div>
                        </div>

                        <div class="panel-body">
                            <br />

                            <form id="validation-form" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="#">

                                <input type="hidden" name="search" value="1">

                                <div class="item form-group " >
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="province_id">  ولایت     <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <select class="basic-single form-control"  dir="rtl" name="province_id" id="province_id" >
                                            <option  value=""> یکی راه انتخاب کنید  </option>
                                            <?php

                                            $view_slider = $db->query("SELECT * FROM provinces ORDER BY id DESC ");
                                            foreach ( $view_slider as $row) {
                                                if(isset($_POST['province_id']) and $_POST['province_id'] == $row['id'])
                                                    echo  ' <option selected value="'.$row['id'].'" >  '.$row['name'].'  </option> ';
                                                else
                                                    echo  ' <option value="'.$row['id'].'" >  '.$row['name'].'  </option> ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group " >
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="district_id">  ولسوالی      <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <select class="basic-single form-control"  dir="rtl" name="district_id" id="district_id" >
                                            <option value=""> یکی راه انتخاب کنید  </option>
                                            <?php

                                            $view_slider = $db->query("SELECT * FROM districts ORDER BY id DESC ");
                                            foreach ( $view_slider as $row) {
                                                if(isset($_POST['district_id']) and $_POST['district_id'] == $row['id'])
                                                    echo  ' <option selected value="'.$row['id'].'" >  '.$row['name'].'  </option> ';
                                                else
                                                    echo  ' <option value="'.$row['id'].'" >  '.$row['name'].'  </option> ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="item form-group " >
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="category_id">  دسته بندی      <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <select class="basic-single form-control"  dir="rtl" name="category_id" id="category_id" >
                                            <option value=""> یکی راه انتخاب کنید  </option>
                                            <?php

                                            $view_slider = $db->query("SELECT * FROM categories ORDER BY id DESC ");
                                            foreach ( $view_slider as $row) {
                                                if(isset($_POST['category_id']) and $_POST['category_id'] == $row['id'])
                                                    echo  ' <option selected value="'.$row['id'].'" >  '.$row['name'].'  </option> ';
                                                else
                                                    echo  ' <option value="'.$row['id'].'" >  '.$row['name'].'  </option> ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group " >
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="type">  نوعیت       <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <select class="basic-single form-control"  dir="rtl" name="type" id="type" >
                                            <option value=""> یکی راه انتخاب کنید  </option>
                                            <option <?php if(isset($_POST['type']) and $_POST['type'] == "payment" ) echo "selected" ?> value="payment"> فروشی  </option>
                                            <option <?php if(isset($_POST['type']) and $_POST['type'] == "rent" ) echo "selected" ?> value="rent"> کرای </option>
                                            <option <?php if(isset($_POST['type']) and $_POST['type'] == "hostage" ) echo "selected" ?> value="hostage">گروی </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="owner_name">  نام صاحب   <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <input type="text" id="owner_name" value="<?php if(isset($_POST['owner_name'])) echo $_POST['owner_name']?>" name="owner_name" class="form-control cfont" placeholder="">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-12 col-xs-12 col-lg-3 bfont" for="owner_email">  ایمیل صاحب      </label>
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                                        <input type="text" id="owner_email" value="<?php if(isset($_POST['owner_email'])) echo $_POST['owner_email'] ?>" name="owner_email" class="form-control cfont" placeholder="">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <button type="submit" class="btn btn-inverse w-md m-b-5 bfont" name = "submit"> &nbsp;<i class="fa fa-search"> </i>&nbsp;&nbsp;  جستجو   &nbsp;</button>
                                        <a href="list_real_estate.php" type="reset" class="btn btn-danger w-md m-b-5 bfont"> &nbsp; <i class="fa fa-refresh"> </i>&nbsp;&nbsp;  تازه سازی  </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

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
                                                        <a class="btn btn-success btn-sm " onclick="details('.$row['id'].')" title="جزعیات"  ><i class="fa  fa-info"></i></a>
                                                        <a class="btn btn-info btn-sm" href="edit_real_estate.php?id='.base64_encode($row['id']).'" ><i class="fa  fa-edit"></i></a>
                                                        <a class="btn btn-danger btn-sm deleted" href="action_real_estate.php?delete&id='.base64_encode($row['id']).'" ><i class="fa  fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            ';
                                        }
                                    }else{
                                        echo "
                                            <tr>
                                                <td colspan='12' class='alert alert-danger' > کدام ملکی  به سیستم اضافه نشده است.  </td>
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


<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title bfont"> مشخصات املاک  </h1>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tbody id="tbody-data">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer" dir="rtl">
                <button type="button" class="btn btn-danger bfont" data-dismiss="modal"> بستن  </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php  require_once("_script.php"); ?>
<script>
    function details(id) {


        $.ajax({
            url : 'ajax_real_estate.php',
            method: "post",
            data : {
                id
            },success:function (response) {
                $('#tbody-data').html(response);
                $('#myModal').modal('show');
            }
        })


    }


</script>


</body>
</html>
