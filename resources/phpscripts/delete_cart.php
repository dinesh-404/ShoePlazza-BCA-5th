<?php
    include('connect.php');
    $id = $_GET['pid'];
    session_start();
    if(!isset($_SESSION['uid'])) header('location: ../Login/signin.php');
    else{

        $uid = $_SESSION['uid'];
        $cmd = "DELETE FROM `user_cart` WHERE item_id = $id AND user_id = $uid"; 
        $r = mysqli_query($connect,$cmd);
        header('location:../../cart.php');
    }
?>