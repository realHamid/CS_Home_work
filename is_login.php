<?php
    
    require_once("config/db.php");

    if(isset($_COOKIE['userName']) and isset($_COOKIE['password'])){
        $username = VD($_COOKIE['userName']);
        $password = VD($_COOKIE['password']);
    }else {
        $username = VD($_POST['username']);
        $password = VD($_POST['password']);
    }

    if(!empty($username) && !empty($password) ){

        $is_user = $db->prepare("SELECT * FROM users WHERE `username` = '$username' and `password` = '$password'  limit 1");
        $is_user->execute();

        if($is_user->rowCount() > 0 ){
            $row = $is_user->fetch();

            $_SESSION['user_id']        = $row['id'];
            $_SESSION['user_name']      = $row['fullname'];
            $_SESSION['user_photo']     = $row['photo'];
            $_SESSION['auth']           = "b58ac01c6c7a9fb5ffd1a5d9c7d68955";
            $_SESSION['user_username']  = $row['username'];

            //Set Cookies
            if(isset($_POST['remeberme']) and $_POST['remeberme'] ==  "1" ){
                setcookie("userName",$username,time()+1024);
                setcookie("password",$password,time()+1024);
            }


            header("location: view/index.php");
            exit();

        }else {
            header("location: login.php?notuser");
            exit();
        }

    }else {
        header("location: login.php?empty");
        exit();
    }


    header("location: error.php");
    exit();


?>