<?php

//var_dump($_COOKIE);
//exit();

    require_once ("config/db.php");
    if(isset($_COOKIE['userName']) and isset($_COOKIE['password'])){
        header("location: is_login.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> سیستم مدریت املاک  </title>
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="view/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <link href="view/assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pe-icon-7-stroke -->
        <link href="view/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <link href="view/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="view/assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <link href="view/assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>
        <!-- Custom css -->
        <link href="view/assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>

        <link href="view/assets/font/font-sans.css" rel="stylesheet" type="text/css" >
        <link href="view/assets/bfont/bfont.css" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="bfont"> ورود. </h3>
                                <small><strong class="bfont"> لطفا نام کاربری و رمز ورود را دایر کنید. </strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="is_login.php" id="loginForm" method="post" >
                            
                            <div class="form-group">
                                <label class="control-label bfont">  نام کاربری  </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="username" autocomplete="off" type="text" class="form-control" name="username" placeholder="نام کاربری">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label bfont">  رمز ورود  </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="pass" type="password" autocomplete="off" class="form-control" name="password" placeholder="******">
                                </div>
                            </div>

                            <div>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox3" name="remeberme" value="1" type="checkbox">
                                    <label for="checkbox3">به خاطر بسپار</label>
                                </div>
                            </div>


                            <div>
                                <button type="submit" class="btn btn-primary pull-right bfont"> ورود  </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src=" view/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src=" view/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>