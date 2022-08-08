<?php
include("loginstuff\connect.php");
session_start();
$id = $_SESSION['uid'];
if (isset($_REQUEST)) {
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
        $updatecmd = "UPDATE `login` SET `fullname`='" . $uname . "',`age`='" . $age . "',`gender`='" . $gender . "',`username`='" . $username . "',`password`='" . $password . "',`address`='" . $address . "',`email`='" . $email . "',`mobile`='" . $mobile . "' WHERE `id`=$id";
        $updatedata = mysqli_query($connect, $updatecmd);

        echo "done";
} else {
    echo "no requrst";
}
?>