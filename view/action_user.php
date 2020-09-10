<?php

    require_once( '_config.php' );

	if(isset($_POST['insertion'])){

	    $data = [
	        'fullname' =>  VD($_POST['fullname']),
	        'username' =>  VD($_POST['username']),
	        'password' =>  VD($_POST['password']),
	        'phone'    =>  VD($_POST['phone']),
	        'email'    =>  VD($_POST['email']),
	        'date'     =>  VD($_POST['date']),
	        'note'     =>  VD($_POST['note']),
            'photo'    => 'notwok'
        ];

		// validation username 
//		$is_exit_username = $db->query("SELECT id FROM users  WHERE username = '$username' and deleted = 0 limit 1  ");
//		if($is_exit_username->num_rows > 0 ){
//			header("location: add_user.php?duplicate");
//			exit();
//		}
		// end validation usename


//		$get_last_id  = $db->query(" SELECT id FROM users ORDER BY id DESC limit 1  ");
//		if($get_last_id->num_rows > 0 ){
//			$last_id = $get_last_id->fetch_array()['id'];
//		}else {
//			$last_id = 1;
//		}
//
//		$img = "";
//
//		if(!empty($_FILES['photo']['name'])){
//
//			if(!file_exists("../upload/user/".$last_id))
//				mkdir("../upload/user/".$last_id);
//
//			$ext = substr($_FILES['photo']['name'], strripos($_FILES['photo']['name'], '.'));
//			$file_name = $last_id."_photo".$ext;
//			$destination = "../upload/user/$last_id/$file_name";
//			if(move_uploaded_file($_FILES['photo']['tmp_name'],$destination)){
//				$img = $destination;
//			}else {
//				$img="../upload/user/default.png";
//			}
//		}else{
//			$img="../upload/user/default.png";
//		}

		$insert = insert('users',$data);
		if($insert){
			header("location: add_user.php?seved");
			exit();
		}else{
			header("location: add_user.php?error");
			exit();
		}
	}

	// ================================  DELETE QUERY (@WaHiD_NaDeEm)  ==========================
	
	 if (isset($_GET['id'])){
        $id    = base64_decode($_GET['id']);
        $sql   = "UPDATE `users` SET deleted = 1 WHERE id = $id LIMIT 1";
        $query = $db->query($sql);
        if ($query) {
            header("location: add_user.php?delete");
            exit();
        }else{
            header("location: add_user.php?error");
            exit();
        } 
    }



    // ============================= UPDATE QUERY (@WaHiD_NaDeEm) ================================ 

    if (isset($_POST['id']) AND isset($_POST['edit'])) {

		$id 				= base64_decode($_POST['id']);

        $data = [
            'fullname' =>  VD($_POST['fullname']),
            'username' =>  VD($_POST['username']),
            'password' =>  VD($_POST['password']),
            'phone'    =>  VD($_POST['phone']),
            'email'    =>  VD($_POST['email']),
            'date'     =>  VD($_POST['date']),
            'note'     =>  VD($_POST['note']),
            'photo'    => 'notwok'
        ];


		// validation username 
//		$is_exit_username = $db->query("SELECT id FROM users  WHERE username = '$username' and deleted = 0 and id != '$id'  limit 1  ");
//		if($is_exit_username->num_rows > 0 ){
//			header("location: edit_user.php?duplicate&id=".base64_encode($id));
//			exit();
//		}
		// end validation usename
		


//		if(!empty($_FILES['photo']['name'])){
//			if(!file_exists("../upload/user/".$id))
//				mkdir("../upload/user/".$id);
//
//			$ext = substr($_FILES['photo']['name'], strripos($_FILES['photo']['name'], '.'));
//			$file_name = $id."_photo".$ext;
//			$destination = "../upload/user/$id/$file_name";
//			if(move_uploaded_file($_FILES['photo']['tmp_name'],$destination)){
//				$img = $destination;
//			}
//		}

//		$query = $db->query($sql);

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