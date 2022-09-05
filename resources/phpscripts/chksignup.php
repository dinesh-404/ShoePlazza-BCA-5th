
<?php
print_r($_REQUEST);
$errorMsg = "";
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
	$unamecheck = mysqli_query($connect, "SELECT * FROM `login` WHERE username = '" . $username . "';");
	$mobilechk = mysqli_query($connect, "SELECT * FROM `login` WHERE mobile = '" . $mobileno . "';");
	$emailchk = mysqli_query($connect, "SELECT * FROM `login` WHERE email = '" . $email . "';");
	$pfp = 'noprofile.png';
	session_start();
	if ($unamecheck->num_rows == 1) {
		$_SESSION['signuperror'] .= 'username already exists<br>';
		header("location:signup.php");
	}
	if ($emailchk->num_rows == 1) {
		$_SESSION['signuperror'] .= 'email already exists<br>';
	}
	if ($mobilechk->num_rows == 1) {
		$_SESSION['signuperror'] .= 'mobile already exists<br>';
	} else {
		print_r($_REQUEST);
		$q_sql =  "INSERT INTO `login`( `fullname`, `age`, `gender`, `username`, `password`, `address`, `email`, `mobile`,`image`) VALUES ('" . $fullname . "','" . $age . "','" . $gender . "','" . $username . "','" . $password . "','" . $address . "','" . $email . "','" . $mobileno . "','".$pfp."');";
		mysqli_query($connect, $q_sql);
		header('location:../../signin.php');
	}

} else {
	echo "error";
}
?>