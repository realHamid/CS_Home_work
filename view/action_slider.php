	<?php require_once( '_config.php' );?>

<?php
	// require_once('../config/php_image_magician.php');

	//================================= INSERT QUERY (@WahHiD_NaDeEm) =========================================

	if (isset($_POST['submit'])) {
		$user_id 	= $_POST['user_id'];
		$date       = $_POST['date'];
		$note    	= $_POST['note'];

		 if(!empty($_FILES['photo']['name'])){
			
			if(!file_exists("../upload/slider/".$user_id."/"))			
				mkdir("../upload/slider/".$user_id."/");
			
			$ext = substr($_FILES['photo']['name'], strripos($_FILES['photo']['name'], '.'));
			$file_name = $user_id."_photo".$ext;
			$destination = "../upload/slider/$user_id/$file_name";
			move_uploaded_file($_FILES['photo']['tmp_name'],$destination);
			
			$magicianObj = new imageLib($destination);
			$magicianObj -> resizeImage(200,200);
			$magicianObj -> saveImage($destination, 100);

			$img = $destination;

		}else{

			$img="../upload/slider/default.png";
		}

		$run_query = $db-> query("INSERT INTO `sliders`(`user_id`,`photo`,`date` ,`note`) VALUES ('$user_id','$img','$date' , '$note')");

		if($run_query){
			header("location: add_slider.php?seved");
			exit();
		}else{
			header("location: add_slider.php?error");
			exit();
		}


	}
	// ==================================== DELETE QUERY (@WaHiD_NaDeEm)==================================

	if (isset($_GET['id'])) {
		$id = base64_decode($_GET['id']);
		$sql   = "UPDATE `sliders` SET deleted = 1 WHERE id = $id LIMIT 1";
        $query = $db->query($sql);
        if ($query) {
            header("location: add_slider.php?delete");
            exit();
        }else{
            header("location: add_slider.php?error");
            exit();
        } 
    }
	


    // ====================================== UPDATE QUERY (@WaHiD_NaDeEm)=====================================

      if (isset($_POST['id']) AND isset($_POST['edit'])) {

    	$id 				= base64_decode($_POST['id']);
    	$user_id 		    = $_POST['user_id'];
		$date 				= $_POST['date'];
		$note 				= $_POST['note'];
		$note 				= $_POST['note'];
		$lastphoto 		= htmlspecialchars($_POST['lastphoto']);

		if(!empty($_FILES['photo']['name'])){
			
			if(!file_exists("../upload/slider/".$user_id."/"))			
				mkdir("../upload/slider/".$user_id."/");
			
			$ext = substr($_FILES['photo']['name'], strripos($_FILES['photo']['name'], '.'));
			$file_name = $user_id."_photo".$ext;
			$destination = "../upload/slider/$user_id/$file_name";
			move_uploaded_file($_FILES['photo']['tmp_name'],$destination);
			
			$magicianObj = new imageLib($destination);
			$magicianObj -> resizeImage(200,200);
			$magicianObj -> saveImage($destination, 100);

			$img = $destination;

		}else{
			$img = $lastphoto;
		}

		    $sql   = "UPDATE `sliders` SET `user_id`='$user_id',`date`='$date',`note`='$note' ,`photo`='$img' WHERE `id`= '$id' LIMIT 1";
		        $query = $db->query($sql);
		        
		        if ($query) {
		            header("location: add_slider.php?edit&id=".base64_encode($id));
		            exit();
		        }else{
		            header("location: add_slider.php?error&id=".base64_encode($id));
		            exit();
		        }
    }






















?>