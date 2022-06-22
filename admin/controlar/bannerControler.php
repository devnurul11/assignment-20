<?php

    require'../controlar/dbconfig.php';
// this code for create data
   if (isset($_POST['saveBanner'])) {
    $title          = $_POST['title'];
    $sub_title      = $_POST['sub_title'];
    $details        = $_POST['details'];

    if (empty($title) || empty($sub_title) || empty($details)) {
        echo "all Fields are requered";
    }else{
        $insetQry = "INSERT INTO banners( title, sub_title, details) values ('{$title}', '{$sub_title}', '{$details}')";

        $isSubmited = mysqli_query($dbcon, $insetQry);

        if ($isSubmited) {
        $message = "Insert Successfully";
        }else{
        $message = "database error";
        }

       
    }
    header("location:../banner/bannerAdd.php?mag={$message}");


}

//this is for update

if (isset($_POST['updateBanner'])) {
    $banner_id      = $_POST['banner_id'];
    $title          = $_POST['title'];
    $sub_title      = $_POST['sub_title'];
    $details        = $_POST['details'];

    if (empty($title) || empty($sub_title) || empty($details)) {
        echo "all Fields are requered";
    }else{
        $updatQry = "UPDATE banners SET title ='{$title}', sub_title= '{$sub_title}',details = '{$details}' WHERE id = '$banner_id'";
        

        $isUpdate = mysqli_query($dbcon, $updatQry);

        if ($isUpdate) {
        $message = "Update Successfully";
        }else{
        $message = "database error";
        }

        header("location:../banner/bannerAdd.php?mag={$message}");
    }
}