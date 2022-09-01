<?php 

	include('../Login/connect.php');
	// $cmd = "select it.id, it.name, it.price, from items from user_cart uc inner joins items it on it.id=uc.item_id where uc.id = 1";
	$user_id=1;
$cmd = 'SELECT it.id ,it.name,it.price,it.image FROM user_cart ut INNER JOIN items it on it.id = ut.item_id WHERE ut.user_id=1 ';	
$q = mysqli_query($connect,$cmd);
	$arr = mysqli_fetch_array($q);
	print_r($q);
	var_dump($arr);
	echo $arr['name'];
	echo $arr['price'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table>
		<?php
		print_r(mysqli_num_rows($q));
		while($r = mysqli_fetch_array($q)){
?>
		<tr>

			<td><?php echo $r['image']; ?></td>
			<td><?php echo $r['name']; ?></td>
			<td><?php echo $r['price']; ?></td>
			<td><a href="delete_cart.php?id=<?php echo $r['id']; ?>">Delete</a></td>
		</tr>
<?php
		}
		?>
	</table>
</body>
</html>