<?php
    require'../controlar/dbconfig.php';

    
//this is for update

    $banner_id      = $_GET['banner_id'];

 
        $deletQry = "UPDATE banners SET active_status = 0 WHERE id = '{$banner_id}'";
        

        $isdeleted = mysqli_query($dbcon, $deletQry);

        if ($isdeleted == true) {
        $message = "Update Successfully";
        }else{
        $message = "database error";
        }


    header("location:../banner/bannerList.php?mag={$message}");
