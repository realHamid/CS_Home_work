<?php

require_once( '_config.php' );

if(isset($_POST['insertion'])) {

    $data = [
        'name'      => Vd($_POST['name']),
        'date'      => Vd($_POST['date']),
        'note'      => Vd($_POST['note']),
        'user_id'   => $user_id
    ];

    $insert = insert('categories',$data);

    if($insert){
        header("location: add_category.php?seved");
        exit();
    }else{
        header("location: add_category.php?error");
        exit();
    }

}



// delete query

if (isset($_GET['id'])){

    $id    = base64_decode($_GET['id']);
    $query = delete('categories',$id);

    if ($query) {
        header("location: list_category.php?delete");
        exit();
    }else{
        header("location: list_category.php?error");
        exit();
    }
}


if (isset($_POST['id']) AND isset($_POST['edit'])) {

    $id 	    = base64_decode($_POST['id']);

    $data = [
        'name'      => Vd($_POST['name']),
        'date'      => Vd($_POST['date']),
        'note'      => Vd($_POST['note'])
    ];


    $query = edit('categories',$data,$id);

    if ($query) {
        header("location: edit_category.php?edit&id=".base64_encode($id));
        exit();
    }else{
        header("location: edit_category.php?error&id=".base64_encode($id));
        exit();
    }

}


?>