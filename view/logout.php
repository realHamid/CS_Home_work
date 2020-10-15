<?php

    ob_start();
    session_start();
    ob_clean();

    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_photo']);
    unset($_SESSION['auth']);

    session_destroy();


unset($_COOKIE["userName"]);
    unset($_COOKIE["password"]);


    setcookie('userName',null,time() -3600);
    setcookie('password',null,time() -3600);

    header("location: ../");
    exit();

?>