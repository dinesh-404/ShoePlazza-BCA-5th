
<?php
print_r($_REQUEST);
if (isset($_REQUEST['username'])) {
	
	include("connect.php");
	
	$fullname = $_REQUEST['fullname'];
	$username = $_REQUEST['username'];
	$mobileno = $_REQUEST['mobilenumber'];
	$age = $_REQUEST['age'];
	$address = $_REQUEST['address'];
	$gender = $_REQUEST['gender'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	if(!isset($_REQUEST['chkuser'])){

		$user = 'user';
	}
	else{
		$user = $_REQUEST['chkuser'];
	}
	$unamecheck = mysqli_query($connect, "SELECT * FROM `login` WHERE username = '" . $username . "';");
	$mobilechk = mysqli_query($connect, "SELECT * FROM `login` WHERE mobile = '" . $mobileno . "';");
	$emailchk = mysqli_query($connect, "SELECT * FROM `login` WHERE email = '" . $email . "';");
	$pfp = 'noprofile.png';
	session_start();
	if ($unamecheck->num_rows == 1) {
		header("location:signup.php??err='username already exists'");
	}
	if ($emailchk->num_rows == 1) {
		header("location:signup.php??err='email already registered'");
	}
	if ($mobilechk->num_rows == 1) {
		header("location:signup.php??err='mobile already registered'");
	} else {
		print_r($_REQUEST);
		
		$q_sql =  "INSERT INTO `login`( `fullname`, `age`, `gender`, `username`, `password`, `address`, `email`, `mobile`,`image`,`user`) VALUES ('" . $fullname . "','" . $age . "','" . $gender . "','" . $username . "','" . $password . "','" . $address . "','" . $email . "','" . $mobileno . "','".$pfp."','".$user."');";
		$a = mysqli_query($connect, $q_sql);
		header('location:../../signin.php');
	}
} else {
	header('location:../../signup.php?err="something went wrong kindly fill the form"');
}
?>