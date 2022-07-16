
<?php
// print_r($_REQUEST);
if (isset($_REQUEST['address'])) {
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
	$mobilechk = mysqli_query($connect,"SELECT * FROM `login` WHERE mobile = '".$mobileno."';");
	$emailchk = mysqli_query($connect,"SELECT * FROM `login` WHERE email = '".$email."';");
	if ($unamechk->num_rows == 1) {
		?> <script>alert('username not available');</script><?php
	}
	if ($emailchk->num_rows == 1) {
		?> <script>alert('email not available');</script><?php
	}
	if ($mobilechk->num_rows == 1) {
		?> <script>alert('mobile not available');</script><?php
	}
	 else {
		print_r($_REQUEST);
		 $q_sql =  "INSERT INTO `login`( `fullname`, `age`, `gender`, `username`, `password`, `address`, `email`, `mobile`) VALUES ('".$fullname."','".$age."','".$gender."','".$username."','".$password."','".$address."','".$email."','".$mobileno."');";
		 mysqli_query($connect, $q_sql);		
	}
}
?>