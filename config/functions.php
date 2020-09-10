<?php


function VD($data){

    if(empty($data)){
        $data = '';
    }

    $data   =   trim($data);
    $data   =   stripslashes($data);
    $data   =   htmlspecialchars($data);
    $data   =   strip_tags($data);

    return $data;
}

function insert( $table , $columns , $error = false ){

    global $db;

    $columns_name 	= '';
    $values  		= '';

    foreach ($columns as $key => $value) {
        $columns_name .= '`'.$key.'`,';
        ($error) ? $values .= "'".$value."'," : $values .= ":".$key.",";
    }

    $columns_name = rtrim($columns_name,',');
    $values = rtrim($values,',');


    $sql = "INSERT INTO $table ($columns_name) VALUES ($values);";

    if($error){
        return $sql;
    }


    $stmt 	=  $db->prepare($sql);
    $result =  $stmt->execute($columns);

    if($result){
        return true;
    }else {
        return false;
    }
}

function edit($table , $columns , $rowId ,  $error = false)
{

    global $db;
    $qury_temp = '';

    foreach ($columns as $key => $value) {
        ($error) ? $qury_temp .= "`".$key."`='".$value."'," : $qury_temp .= "`".$key."`= :".$key.",";
    }

    $qury_temp = rtrim($qury_temp,',');

    $sql = "UPDATE `$table` SET  $qury_temp  WHERE id = '$rowId' ";

    if($error){
        return  $sql;
    }


    $stmt 	=  $db->prepare($sql);
    $result =  $stmt->execute($columns);

    if($result){
        return true;
    }else {
        return false;
    }


}

function delete ($table , $rowId , $error = false ){

    global $db;

    $sql = "DELETE FROM `$table` WHERE  id = '$rowId' LIMIT 1  ";

    if($error){
        return $sql;
    }

    $stmt 	=  $db->prepare($sql);
    $result =  $stmt->execute();

    if($result){
        return true;
    }else {
        return false;
    }
}


//function select($table , $condition , $action  ){
//    global $db;
//
//    $temp_condition = '';
//    $temp_data = [];
//    foreach ($condition as $id =>  $row ){
//        $temp_condition .= "`$row[0]` $row[1] :$row[1] ";
//        $temp_data[$id] = [$row[0],$row[2]];
//    }
//
//    $data = $db->query("SELECT * FROM  `$table` ORDER by id DESC ")->fetchAll();
//    return $data;
//}


?>