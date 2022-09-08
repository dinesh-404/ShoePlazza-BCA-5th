
<?php
print_r($_REQUEST);
$errorMsg = "";
if (isset($_REQUEST['username'])) {
	
	include("connect.php");
	if(isset($_REQUEST['admin'])){

		$user = $_REQUEST['admin'];
	}
	else{
		$user = 'user';
	}
	
	$fullname = $_REQUEST['fullname'];
	$username = $_REQUEST['username'];
	$mobileno = $_REQUEST['mobilenumber'];
	$age = $_REQUEST['age'];
	$address = $_REQUEST['address'];
	$gender = $_REQUEST['gender'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	if($user == 'admin'){
		$table = 'admin_login';
	}
	if($user == 'user'){
		$table=='login';
	}
	$unamecheck = mysqli_query($connect, "SELECT * FROM `".$table."` WHERE username = '" . $username . "';");
	$mobilechk = mysqli_query($connect, "SELECT * FROM `".$table."` WHERE mobile = '" . $mobileno . "';");
	$emailchk = mysqli_query($connect, "SELECT * FROM `".$table."` WHERE email = '" . $email . "';");
	$pfp = 'noprofile.png';
	session_start();
	if ($unamecheck->num_rows == 1) {
		$_SESSION['signuperror'] .= 'username already exists<br>';
		// header("location:signup.php");
		echo "e1";
	}
	if ($emailchk->num_rows == 1) {
		$_SESSION['signuperror'] .= 'email already exists<br>';
		echo "e2";

	}
	if ($mobilechk->num_rows == 1) {
		$_SESSION['signuperror'] .= 'mobile already exists<br>';
		echo "e3";

	} else {
		print_r($_REQUEST);
		
		$q_sql =  "INSERT INTO `".$table."`( `fullname`, `age`, `gender`, `username`, `password`, `address`, `email`, `mobile`,`image`) VALUES ('" . $fullname . "','" . $age . "','" . $gender . "','" . $username . "','" . $password . "','" . $address . "','" . $email . "','" . $mobileno . "','".$pfp."');";
		// echo $q_sql; 	
		
		mysqli_query($connect, $q_sql);
		// header('location:../../signin.php');
	}

} else {
	echo "error";
}
?>