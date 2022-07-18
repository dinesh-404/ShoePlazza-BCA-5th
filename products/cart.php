<?php
print_r($_REQUEST);

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'project';
	$connect = mysqli_connect($host, $user, $pass, $database) or die("PHP & MySQL Connection Error");

$query = mysqli_query($connect,"SELECT id, username, email, mobile, address FROM `LOGIN`;");
$a = mysqli_fetch_row($query);
$b = sizeof($a);
for ($i=0; $i <$b ; $i++) { 
    echo $a[$i]."<br>".$i;
}
// size is 0 to 4
$id = $a[0];
$username=$a[1];
$email=$a[2];
$mobile=$a[3];
$product= $_REQUEST['productname'];
$qty= $_REQUEST['qty'];
$totprice= $_REQUEST['price'];
?>