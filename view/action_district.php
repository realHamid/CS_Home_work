<?php



require_once( '_config.php' );

if(isset($_POST['insertion'])){

    $photo =  save_file('districts',last_id('districts'));

    $data = [
        'img'           => $photo,
        'province_id'   => VD($_POST['province_id']),
        'name'          => VD($_POST['name']),
        'date'          => VD($_POST['date']),
        'note'          => VD($_POST['note']),
        'user_id'       => $user_id
    ];

    $insert = insert('districts',$data);

    if($insert){
        header("location: add_district.php?seved");
        exit();
    }else{
        header("location: add_district.php?error");
        exit();
    }

}

// delete query
if (isset($_GET['id'])){

    $id    = base64_decode($_GET['id']);
    $query = delete('districts',$id);

    if ($query) {
        header("location: list_district.php?delete");
        exit();
    }else{
        header("location: list_district .php?error");
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
        'img'           => $photo,
        'province_id'   => VD($_POST['province_id']),
        'name'          => VD($_POST['name']),
        'date'          => VD($_POST['date']),
        'note'          => VD($_POST['note'])
    ];

    $query = edit('districts',$data,$id);
    if ($query) {
        header("location: edit_district.php?edit&id=".base64_encode($id));
        exit();
    }else{
        header("location: edit_district.php?error&id=".base64_encode($id));
        exit();
    }
}









?>