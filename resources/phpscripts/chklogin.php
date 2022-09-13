<?php
include("connect.php");
$uname = $_REQUEST['username'];
$pass = $_REQUEST['password'];
$q_sql =  "SELECT * FROM `login` WHERE `username` = '" . $uname . "' and `password` = '" . $pass . "';";
$result = mysqli_query($connect, $q_sql);
$n= mysqli_num_rows($result);
$q_sql1 =  "SELECT * FROM `admin_login` WHERE `username` = '" . $uname . "' and `password` = '" . $pass . "';";
$result1 = mysqli_query($connect, $q_sql1);
$n1= mysqli_num_rows($result1);
if ($n > 0) {
	$data = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	session_start();
	$_SESSION['uid'] = $data['id'];
	$_SESSION['uname'] = $data['username'];
	$_SESSION['pfp'] = $data['image'];	
	header("location:../../index.php");
} 
else if ($n1 > 0) {
	$data = mysqli_fetch_array($result1,MYSQLI_BOTH);	
	var_dump($data);
	var_dump($n1);
	session_start();
	$_SESSION['uid'] = $data['id'];
	$_SESSION['admin']= true;
	$_SESSION['uname'] = $data['username'];
	$_SESSION['pfp'] = $data['image'];	
	header("location:../../admin.php");
} 

else {
	header('location:../../signin.php?err="please login again"');
}
?>