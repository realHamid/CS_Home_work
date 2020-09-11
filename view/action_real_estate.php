<?php


require_once( '_config.php' );

if(isset($_POST['insertion'])) {

    $photo = save_file('real_estates', last_id('real_estates'));

    $data = [
        'province_id'       => VD($_POST['province_id']),
        'district_id'       => VD($_POST['district_id']),
        'category_id'       => VD($_POST['category_id']),
        'type'              => VD($_POST['type']),
        'amount'            => VD($_POST['amount']),
        'owner_name'        => VD($_POST['owner_name']),
        'owner_number'      => VD($_POST['owner_number']),
        'owner_email'       => VD($_POST['owner_email']),
        'address'           => VD($_POST['address']),
        'date'              => VD($_POST['date']),
        'note'              => VD($_POST['note']),
        'img'               => $photo,
        'user_id'           => $user_id
    ];

    $insert = insert('real_estates',$data);

    if($insert){
        header("location: add_real_estate.php?seved");
        exit();
    }else{
        header("location: add_real_estate.php?error");
        exit();
    }

}


// delete query

if (isset($_GET['id'])){

    $id    = base64_decode($_GET['id']);
    $query = delete('real_estates',$id);

    if ($query) {
        header("location: list_real_estate.php?delete");
        exit();
    }else{
        header("location: list_real_estate.php?error");
        exit();
    }
}



if (isset($_POST['id']) AND isset($_POST['edit'])) {

    $id = base64_decode($_POST['id']);
    $path = VD($_POST['lastphoto']);

    $photo = $path;
    if (!empty($_FILES['photo']['name'])) {
        $photo = replace_file('user', $id, $path);
    }

    $data = [
        'province_id'       => VD($_POST['province_id']),
        'district_id'       => VD($_POST['district_id']),
        'category_id'       => VD($_POST['category_id']),
        'type'              => VD($_POST['type']),
        'amount'            => VD($_POST['amount']),
        'owner_name'        => VD($_POST['owner_name']),
        'owner_number'      => VD($_POST['owner_number']),
        'owner_email'       => VD($_POST['owner_email']),
        'address'           => VD($_POST['address']),
        'date'              => VD($_POST['date']),
        'note'              => VD($_POST['note']),
        'img'               => $photo
    ];

    $query = edit('real_estates',$data,$id);

    if ($query) {
        header("location: edit_real_estate.php?edit&id=".base64_encode($id));
        exit();
    }else{
        header("location: edit_real_estate.php?error&id=".base64_encode($id));
        exit();
    }

}


?>