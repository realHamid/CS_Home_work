<?php

    require_once( '_config.php' );

	if(isset($_POST['insertion'])){

        $photo =  save_file('user',last_id('users'));

	    $data = [
	        'fullname' =>  VD($_POST['fullname']),
	        'username' =>  VD($_POST['username']),
	        'password' =>  VD($_POST['password']),
	        'phone'    =>  VD($_POST['phone']),
	        'email'    =>  VD($_POST['email']),
	        'date'     =>  VD($_POST['date']),
	        'note'     =>  VD($_POST['note']),
            'photo'    =>  $photo
        ];

		$insert = insert('users',$data);
		if($insert){
			header("location: add_user.php?saved");
			exit();
		}else{
			header("location: add_user.php?error");
			exit();
		}
	}

	// ================================  DELETE QUERY ()  ==========================
	
	 if (isset($_GET['id'])){

        $id    = base64_decode($_GET['id']);
        $query = delete('users',$id);

        if ($query) {
            header("location: list_users.php?delete");
            exit();
        }else{
            header("location: list_users.php?error");
            exit();
        }
    }



    // ============================= UPDATE QUERY () ================================

    if (isset($_POST['id']) AND isset($_POST['edit'])) {

		$id 	    = base64_decode($_POST['id']);
        $path       = VD($_POST['lastphoto']);

		$photo  = replace_file('user',$id,$path);

        $data = [
            'fullname' =>  VD($_POST['fullname']),
            'username' =>  VD($_POST['username']),
            'password' =>  VD($_POST['password']),
            'phone'    =>  VD($_POST['phone']),
            'email'    =>  VD($_POST['email']),
            'date'     =>  VD($_POST['date']),
            'note'     =>  VD($_POST['note']),
            'photo'    => $photo
        ];

        $query = edit('users',$data,$id);

		if ($query) {
			header("location: edit_user.php?edit&id=".base64_encode($id));
			exit();
		}else{
			header("location: edit_user.php?error&id=".base64_encode($id));
			exit();
		}
    }
?>