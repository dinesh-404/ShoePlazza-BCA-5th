<?php
    include('../Login/connect.php');
    $id = $_GET['id'];
    session_start();
    if(!isset($_SESSION['uid'])) header('location: ../Login/signin.php');
    $uid = $_SESSION['uid'];
    $cmd = "DELETE FROM `user_cart` WHERE item_id = $id AND user_id = $uid"; 
    $r = mysqli_query($connect,$cmd);
    echo $cmd;
    header('location:../../cart.php');
?>