<?php
    
    ob_clean();
    session_start();
    
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_photo']);
    unset($_SESSION['auth']);
    
    session_destroy();
    header("location: ../");
    exit();

?>