<?php
    
    require_once("config/db.php");

    $username = VD($_POST['username']);
    $password = VD($_POST['password']);


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

            header("location: view/add_user.php");
            exit();

        }else {
            header("location: login.php?notuser");
            exit();
        }

    }else {
        header("location: login.php?empty");
        exit();
    }





?>