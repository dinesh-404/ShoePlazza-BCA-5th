<?php
include("connect.php");
session_start();
if (!isset($_SESSION['uid'])) header('location:../../signin.php');
if (isset($_REQUEST['username'])) {
    if (!strlen($_FILES['avatar']['name']) == 0) {
        // profile photo
        $src = $_FILES['avatar']['tmp_name'];
        //destination path
        // relative path for copy
        $dest = "../pfp/" . $_FILES['avatar']['name'];
        $imgpath = $_FILES['avatar']['name'];
        copy($src, $dest);
    } else {
        $imgpath = $_REQUEST['nofileupdate'];
    }
    $id = $_SESSION['uid'];
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
    if ($result == 0) {
        header('location:../../profile.php?err="updated successfully"');
    } else {
        echo "error";
    }
} else {
    header("location:../../profile.php?err='please re-submit the form'");
}
