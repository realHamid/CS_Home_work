<?php

session_start();
ob_start();

header ('Content-type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
mb_regex_encoding('UTF-8');


ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');
ini_set('max_file_uploads', '50');

define('IS_ENV_PRODUCTION', false);

if (IS_ENV_PRODUCTION){
     error_reporting(0);
}

ini_set('error_log', 'error.txt');
date_default_timezone_set('Asia/Kabul');


// Set the database access information as constants.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_SCHEMA', 'shop');

$db = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD);

// Make the connection.
if (!$db) {
    die('Could not connect to MySQLi: ' .$db->mysqli_error);
}


// Select the database.
if (!@mysqli_select_db($db, DB_SCHEMA)) {
    @mysqli_close($db);
    die('Could not select the database: ' . $db->mysqli_error);
} else {
    @mysqli_query($db, "SET NAMES utf8");
    @mysqli_query($db, "SET CHARACTER SET utf8");
    mysqli_set_charset($db, 'utf8');
}

$GLOBALS['DB'] = $db;


function VD($data){
    $data   =   trim($data);
    $data   =   stripslashes($data);
    $data   =   htmlspecialchars($data);
    $data   =   $GLOBALS['DB']->real_escape_string($data);
    $data   =   strip_tags($data);
    return $data;
}

// change date to right format
function PD($date , $sine = "-"){
    $return_data 	= "";
    if(!empty($date)){
        list($y,$m,$d) = explode($sine, $date);
        $monthes =  array( "" , "حمل" ,"ثور","جوزا","سرطان","اسد","سنبله","میزان","عقرب","قوس","جدی","دلو","حوت" );
        $return_data  = $y."،".$monthes[(int)$m]." ".(int)$d;
        return $return_data;
    }else{
        return $return_data;
    }
}


?>