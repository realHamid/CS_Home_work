<?php


    require_once('../config/db.php');

    if( isset($_SESSION['user_name']) && isset($_SESSION['user_username']) && !isset($_SESSION['user_id']) && !isset($_SESSION['auth']) ){
        header("location: lockscreen.php");
        exit();
    }

    if( !isset($_SESSION['user_id']) || !isset($_SESSION['user_name']) || $_SESSION['auth'] != "b58ac01c6c7a9fb5ffd1a5d9c7d68955-HV" ){
        header("location: ../");
        exit();
    }


    $user_id    = $_SESSION['user_id'];
    $user_name  = $_SESSION['user_name'];
    $user_photo = $_SESSION['user_photo'];
    
    
?>