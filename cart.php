<?php

include('resources/phpscripts/connect.php');
session_start();
if (!isset($_SESSION['uid'])) header('location:signin.php');
$user_id = $_SESSION['uid'];
$cmd = 'SELECT it.id ,it.name,it.price,it.image FROM user_cart ut INNER JOIN items it on it.id = ut.item_id WHERE ut.user_id= ' .$user_id;
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
	<link rel="stylesheet" href="resources/css/shop.css">
	<title>My Cart</title>
</head>
<body>
	<?php include('resources/imports/cursor.php'); 
	include('resources/imports/navbar.php');
	$sum = 0;
	$userp = mysqli_query($connect, $cmd);
	if (mysqli_num_rows($userp) == 0) { ?>
		<div class="noItem">
			<h1>There are no items in your cart :(</h1><br><br>
			<h3><a href="shop.php">click me to buy some ;)</a>
			</h3>
		</div>
	<?php
	} else {
	?>
		<table class="CartTable">
			<tr>
				<th colspan="4">
					<h1>My Cart</h1>
				</th>
			</tr>
			<?php
			while ($row = mysqli_fetch_array($userp)) {
				$sum = $sum + $row['price'];
			?>
				<tr class="CartRow">
					<td class="cartimg"><img src="resources/productimg/<?php echo $row['image']; ?>-1.jpg" alt="" srcset=""></td>
					<td class="CartColumns"><?php echo $row['name']; ?></td>
					<td class="CartColumns">₹<?php echo $row['price']; ?></td>
					<td class="CartColumns"><a href="resources/phpscripts/delete_cart.php?pid=<?php echo $row['id']; ?>">Remove</a></td>
				</tr>
			<?php
			}
			?>
			<tr class="price">
				<td class="CartColumns" colspan="2">Total</td>
				<td class="CartColumms"> ₹<?php echo $sum;  ?></td>
			</tr>
		</table>
	<?php
	}
	include("resources/imports/footer.php");
	?>
</body>
</html>