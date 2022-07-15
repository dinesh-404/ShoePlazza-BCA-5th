<?php
//print_r($_POST);
include("connect.php");
$uname = $_REQUEST['username'];
$pass = $_REQUEST['password'];

$q_sql =  "SELECT * FROM `login` WHERE `username` = '" . $uname . "' and `password` = '" . $pass . "';";
$result = mysqli_query($connect, $q_sql);
$n = mysqli_num_rows($result);
if ($n == 1) {
	$row = mysqli_fetch_row($result);
	session_start();
	$_SESSION['userid'] = $row[0];
	$_SESSION['username'] = $row[1];
	header("location:\index.php");
} else {
?>
	<script>
		alert('nahhhhh')
	</script>
<?php
}
?>