<?php

include('resources/phpscripts/connect.php');
// $cmd = "select it.id, it.name, it.price, from items from user_cart uc inner joins items it on it.id=uc.item_id where uc.id = 1";
session_start();
if(!isset($_SESSION['uid'])) header('location:signin.php');
$user_id = $_SESSION['uid'];

$cmd = 'SELECT it.id ,it.name,it.price,it.image FROM user_cart ut INNER JOIN items it on it.id = ut.item_id WHERE ut.user_id= ' . +$user_id;
echo $cmd;
echo "<br>";
$q = mysqli_query($connect, $cmd);
$count = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="resources/css/imports.css">
	<title>Document</title>
	<style>
		*{
			font-family: sans-serif;
			text-decoration: none;
		}
		.CartRow{
			border-radius: 10px;
			overflow: hidden;
			/* box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; */
			box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
			transition: all .7s;
		}
		.CartTable{
			border-collapse: separate;
			border-spacing: 0 30px;
			margin: auto;
			width: 800px;
		}
		.CartColumns{
			padding: 50px;	
		}
		.cartimg img{
			width: 100%;
			height: 100%;
			border-radius: 10px 0px 0px 10px;
		}
		.cartimg{
			margin: 0;
			width: 200px;
			height: 230px;
			padding: 0;
		}
		.CartRow:hover{
			box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
		}

		
	</style>
</head>

<body>
	<?php include('resources/imports/navbar.php'); ?>
	<table class="CartTable">
	<?php
	$sum = 0;
	$userp = mysqli_query($connect, $cmd);
	$row = mysqli_fetch_array($userp); 
	var_dump($row);
	while ($row = mysqli_fetch_array($userp)) {
		$sum = $sum+$row['price'];
	?>
			<tr class="CartRow">
				<td class="cartimg"><img src="resources/productimg/<?php echo $row['image']; ?>-1.jpg" alt="" srcset=""></td>
				<td class="CartColumns"><?php echo $row['name']; ?></td>
				<td class="CartColumns">₹<?php echo $row['price']; ?></td>
				<td class="CartColumns"><a href="resources/phpscripts/delete_cart.php?id=<?php echo $row['id']; ?>">Remove</a></td>
			</tr>

	<?php
	}
	?>
	<tr class="CartRow">
		<td class="CartColumns" colspan="2">Total</td>
		<td class="CartColumms">₹<?php echo $sum;  ?></td>
		<td class="CartColumns"><a href="http://">Check Out</a></td>		

	</tr>
	</table>
</body>

</html>