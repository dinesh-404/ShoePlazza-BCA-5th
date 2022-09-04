<?php
    session_start();
    include('connect.php');
    $cart_id = $_GET['id'];
    if (!isset($_SESSION['uid'])) header('location:../Login/singin.php');
    $user_id = $_SESSION['uid'];
    $cmd = "insert into user_cart (item_id,user_id,status) values ($cart_id,$user_id,'added to cart')";
    $exe = mysqli_query($connect,$cmd);
    var_dump($exe);
    print_r($exe);

?>
