<?php 

	include('../Login/connect.php');
	// $cmd = "select it.id, it.name, it.price, from items from user_cart uc inner joins items it on it.id=uc.item_id where uc.id = 1";
	$user_id=1;
$cmd = 'SELECT it.id ,it.name,it.price FROM user_cart ut INNER JOIN items it on it.id = ut.item_id WHERE ut.user_id=1 ';	
$q = mysqli_query($connect,$cmd);
	$arr = mysqli_fetch_array($q);
	print_r($q);
	var_dump($arr);
?>