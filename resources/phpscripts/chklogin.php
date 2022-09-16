<?php
include("connect.php");
if(!isset($_REQUEST['username'])) header('location:../../signin.php');
if(!isset($_REQUEST['password'])) header('location:../../signin.php');

$uname = $_REQUEST['username'];
$pass = $_REQUEST['password'];
$q_sql =  "SELECT * FROM `login` WHERE `username` = '" . $uname . "' and `password` = '" . $pass . "';";
$result = mysqli_query($connect, $q_sql);
var_dump($result);
$n= mysqli_num_rows($result);
if ($n > 0) {
	$data = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	var_dump($data);
	session_start();
	$_SESSION['uid'] = $data['id'];
	$_SESSION['uname'] = $data['username'];
	$_SESSION['pfp'] = $data['image'];
	if($data['role']=='admin'){
		$_SESSION['admin']=true;
		header('location:../../admin.php');
	}
	else{
		header("location:../../index.php");
	}
} 
else {
	header('location:../../signin.php?err="incorrect username or passwrord \n please login again"');
}
?>