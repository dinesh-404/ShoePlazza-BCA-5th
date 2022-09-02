<?php
include("connect.php");
$uname = $_REQUEST['username'];
$pass = $_REQUEST['password'];
$q_sql =  "SELECT * FROM `login` WHERE `username` = '" . $uname . "' and `password` = '" . $pass . "';";
$result = mysqli_query($connect, $q_sql);
$n = mysqli_num_rows($result);

if ($n > 0) {
	$data = mysqli_fetch_array($result,MYSQLI_BOTH);	
	session_start();
	$_SESSION['uid'] = $data['id'];
	$_SESSION['uname'] = $data['username'];
	$_SESSION['pfp'] = $data['image'];	
	header("location:\ShoePlazza\index.php");
} 
else {
	header('location:signin.php');
}
?>