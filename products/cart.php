<?php
print_r($_REQUEST);

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'project';
	$connect = mysqli_connect($host, $user, $pass, $database) or die("PHP & MySQL Connection Error");

$query = mysqli_query($connect,"SELECT id, username, fullname, email, mobile, address FROM `LOGIN`;");
$a = mysqli_fetch_row($query);
$b = sizeof($a);
for ($i=0; $i <=$b ; $i++) { 
    echo $a[$i]."<br>".$i;
}
echo $a[5];
// size is 0 to 4
$id = $a[0];
$username=$a[1];
$fullname=$a[2];
$email=$a[3];
$mobile=$a[4];
$address=$a[5];
$product= $_REQUEST['productname'];
$qty= $_REQUEST['qty'];
$totprice= $_REQUEST['price'];

$insrt = "INSERT INTO `customers` (`id`, `username`, `fullname`, `address`, `email`, `mobileno`, `itemname`, `qty`, `totalcost`) VALUES ('".$id."', '".$username."', '".$fullname."','".$address."', '".$email."', '".$mobile."', '".$product."', '".$qty."', '".$totprice."'); ";
$ok = mysqli_query($connect,$insrt);

?>