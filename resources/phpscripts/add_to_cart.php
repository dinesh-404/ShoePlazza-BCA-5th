<?php
    session_start();
    include('connect.php');
    if(!isset($_REQUEST['pid'])) header('location:../../shop.php');
    $cart_id = $_REQUEST['pid'];
    if (!isset($_SESSION['uid'])) header('location:../../signin.php?err="please login"');
    else{
        $user_id = $_SESSION['uid'];
        $cmd = "insert into user_cart (item_id,user_id,status) values ($cart_id,$user_id,'added to cart')";
        $exe = mysqli_query($connect,$cmd);
        header('location:../../productinfo.php?pid='.$cart_id.'?err="succsessfully added to cart"');
    }
?>
