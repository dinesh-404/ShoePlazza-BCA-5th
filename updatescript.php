<?php
include("Login/connect.php");
print_r($_REQUEST);
session_start();
$id = $_SESSION['uid'];
if (!strlen($_FILES['avatar']['name']) == 0) {
    // profile photo
    $src = $_FILES['avatar']['tmp_name'];
    //destination path
    $despath = $_SERVER['DOCUMENT_ROOT'] . "/ShoePlazza/Login/pfp/";
    // relative path for copy
    $dest = $despath . $_FILES['avatar']['name'];
    $imgpath = $_FILES['avatar']['name'];
    copy($src, $dest);
} else {
    $imgpath = $_REQUEST['nofileupdate'];
}
var_dump($_FILES);


if (isset($_REQUEST['username'])) {
    echo "<br>request log<br>";
    print_r($_REQUEST);
    $uname = $_REQUEST['fullname'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobileno'];
    $image =  $imgpath;


    $updatecmd = "UPDATE `login` SET `fullname`='" . $uname . "',`age`='" . $age . "',`gender`='" . $gender . "',`username`='" . $username . "',`password`='" . $password . "',`address`='" . $address . "',`email`='" . $email . "',`mobile`='" . $mobile . "',`image`='" . $image . "' WHERE `id`=$id";

     $updatedata = mysqli_query($connect, $updatecmd, $result = MYSQLI_STORE_RESULT);

    var_dump($_FILES);

    // if ($result == 0) {
    //     // header('location:profile.php');
    // } else {
    //     echo "error";
    // }
} else {
    //header("location:profile.php");
}
