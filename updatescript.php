<?php
include("loginstuff\connect.php");
echo "ok";
print_r($_REQUEST);
session_start();
$id = $_SESSION['uid'];
var_dump($_FILES);
// profile photo
$src = $_FILES['avatar']['tmp_name'];
$despath= $_SERVER['DOCUMENT_ROOT']."/loginstuff/pfp/";
$dest = $despath.$_FILES['avatar']['name'];
copy($src,$dest);
var_dump($dest);


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
    $mobile = $_REQUEST['mobile'];
    $image =  $_REQUEST['avatar'];
    $updatecmd = "UPDATE `login` SET `fullname`='" . $uname . "',`age`='" . $age . "',`gender`='" . $gender . "',`username`='" . $username . "',`password`='" . $password . "',`address`='" . $address . "',`email`='" . $email . "',`mobile`='" . $mobile . "',`image`='".$image."' WHERE `id`=$id";
    $updatedata = mysqli_query($connect, $updatecmd,$result = MYSQLI_STORE_RESULT);
    
    var_dump($_FILES);

    // $src = $_FILES['temp_name'];
    // $des = "";
    // copy($src,$des);
    if($result == 0){
       // header('location:profile.php');
    }
    else{
        echo "error";
    }

}
else {
    //header("location:profile.php");
}
