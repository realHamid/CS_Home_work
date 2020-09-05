<?php 

    require_once("../config/db.php"); 
    unset($_SESSION['user_id']);
    unset($_SESSION['auth']);

?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> شیرین کام  </title>
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome 4.7.0 -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- socicon css -->
        <link href="assets/socicon/social.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <link href="assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>
        <!-- Custom css -->
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>

        <link href="assets/font/font-sans.css" rel="stylesheet" type="text/css" >
        <link href="assets/bfont/bfont.css" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="lock-wrapper-page">
            <div class="text-center">
                <a href="#" class="logo-lock"><i class="icon socicon-feedburner"></i> <span>AdmnPage</span> </a>
            </div>
            <form method="post" action="is_lockscreen.php" class="text-center m-t-20">

                <div class="user-thumb">
                    <img src="<?php echo $_SESSION['user_photo']?>" alt="assets/dist/img/avatar.png" class="img-responsive img-circle img-thumbnail" >
                </div>
                <div class="form-group">
                    <h3 class="bfont"> <?php  echo $_SESSION['user_name'] ?> </h3>
                    <p  class="bfont" style="font-size: 16px">  برای ورود رمز  را وارد نماید. </p>
                    <div class="input-group m-t-20">
                        <input class="form-control bfont" name="password" placeholder="Password" type="password">
                        <i class="fa fa-key"></i>
                        <span class="input-group-btn"> 
                            <button type="submit" class="btn btn-success bfont">Log In</button> 
                        </span>
                    </div>
                </div>

                <div class="text-right">
                    <a href="logout.php" class="text-muted bfont" style="font-size: 20px"> <?php echo $_SESSION['user_name'] ?> : نستم   </a>
                </div>

            </form>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>