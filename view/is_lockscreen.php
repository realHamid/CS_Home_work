<?php



    require_once("../config/db.php");
    if(isset($_SESSION['user_name']) && isset($_SESSION['user_username']) ){

        $password = VD($_POST['password']);
        $username = $_SESSION['user_username'];

        if(!empty($password)){

            $is_user = $db->query("SELECT * FROM users WHERE `username` = '$username' and `password` = '$password' limit 1 ");
            
            if($is_user->rowCount() > 0){

                $row = $is_user->fetch();

                var_dump($row);

                $_SESSION['user_id']        = $row['id'];
                $_SESSION['user_name']      = $row['fullname'];
                $_SESSION['user_photo']     = $row['photo'];
                $_SESSION['auth']           = "b58ac01c6c7a9fb5ffd1a5d9c7d68955";
                $_SESSION['user_username']  = $row['username'];

                header("location: index.php");
                exit();

            }else {
                header("location: lockscreen.php?notuser");
                exit();
            }

        }else {
            header("location: lockscreen.php?empty");
            exit();    
        }
    }else {
        header("location: ../");
        exit();
    }



?>