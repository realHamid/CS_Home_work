<?php


require_once( '_config.php' );

if(isset($_POST['insertion'])){

    $photo =  save_file('province',last_id('provinces'));

    $data = [
        'image'     => $photo,
        'name'      => VD($_POST['name']),
        'date'      => VD($_POST['date']),
        'note'      => VD($_POST['note']),
        'user_id'   => $user_id
    ];

    $insert = insert('provinces',$data);

    if($insert){
        header("location: add_province.php?saved");
        exit();
    }else{
        header("location: add_province.php?error");
        exit();
    }

}



// delete query

if (isset($_GET['id'])){

    $id    = base64_decode($_GET['id']);
    $query = delete('provinces',$id);

    if ($query) {
        header("location: list_province.php?delete");
        exit();
    }else{
        header("location: list_province.php?error");
        exit();
    }
}


//


if (isset($_POST['id']) AND isset($_POST['edit'])) {

    $id 	    = base64_decode($_POST['id']);
    $path       = VD($_POST['lastphoto']);

    $photo      = $path;
    if(!empty($_FILES['photo']['name'])){
        $photo      = replace_file('user',$id,$path);
    }


    $data = [
        'image'     => $photo,
        'name'      => VD($_POST['name']),
        'date'      => VD($_POST['date']),
        'note'      => VD($_POST['note']),
        'user_id'   => $user_id
    ];

    $query = edit('provinces',$data,$id);

    if ($query) {
        header("location: edit_province.php?edit&id=".base64_encode($id));
        exit();
    }else{
        header("location: edit_province.php?error&id=".base64_encode($id));
        exit();
    }

}


?>