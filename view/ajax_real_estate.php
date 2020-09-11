<?php

require_once ("_config.php");

$id = VD($_POST['id']);
$status = ['payment' => 'فروشی' , 'rent' => 'کرای' , 'hostage' => 'گروی'];

$row = $db->query("SELECT * FROM `real_estates` WHERE id = $id LIMIT 1  ")->fetch();

$category_id     = $row['category_id'];
$category_name   = $db->query("SELECT * FROM categories WHERE id = $category_id LIMIT 1")->fetch()['name'];


$province_id    = $row['province_id'];
$province_name  = $db->query("SELECT * FROM provinces WHERE id = $province_id LIMIT 1")->fetch()['name'];

$district_id    = $row['district_id'];
$district_name  = $db->query("SELECT * FROM districts WHERE id = $district_id LIMIT 1")->fetch()['name'];


echo '
    <tr>
        <td colspan="2"> <p class="bfont" style="font-size: 20px"> مشخصات املاک</p> </td>
    </tr>
    <tr>
        <td>عکس  </td>
        <td> <img src="'.$row['img'].'" width="100px"> </td>
    </tr>
    <tr>
        <td>مقدار پول </td>
        <td>'.$row['amount'].'</td>
    </tr>
    <tr>
        <td>دسته بندی</td>
        <td>'.$category_name.'</td>
    </tr>
    <tr>
        <td>نوعیت </td>
        <td>'.$status[$row['type']] .'</td>
    </tr>
    <tr>
        <td colspan="2"> <p class="bfont" style="font-size: 20px"> موقعیت املاک </p> </td>
    </tr>
    <tr>
        <td>ولایت </td>
        <td>'.$province_name.'</td>
    </tr>
    <tr>
        <td> ولسوالی  </td>
        <td>'.$district_name.'</td>
    </tr>
    <tr>
        <td>آدرس</td>
        <td>'.$row['address'].'</td>
    </tr>
    
    <tr>
        <td colspan="2"> <p class="bfont" style="font-size: 20px">  مشخصات صاحب املاک </p> </td>
    </tr>
    
    <tr>
        <td>نام صاحب</td>
        <td>'.$row['owner_name'].'</td>
    </tr>
    <tr>
        <td>شماره صاحب</td>
        <td>'.$row['owner_number'].'</td>
    </tr>
    <tr>
        <td>ایمیل صاحب</td>
        <td>'.$row['owner_email'].'</td>
    </tr>
    <tr>
        <td>تاریخ ثبت</td>
        <td>'.$row['date'].'</td>
    </tr>
    <tr>
        <td>نوت</td>
        <td>'.$row['note'].'</td>
    </tr>
    
';



?>