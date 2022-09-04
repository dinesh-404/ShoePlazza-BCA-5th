<?php

include('../Login/connect.php');
session_start();
// $cmd = "select it.id, it.name, it.price, from items from user_cart uc inner joins items it on it.id=uc.item_id where uc.id = 1";
if (!isset($_SESSION['uid'])) header('location: ../Login/signin.php');
$user_id = $_SESSION['uid'];
echo $user_id;
$cmd = 'SELECT it.id ,it.name,it.price,it.image FROM user_cart ut INNER JOIN items it on it.id = ut.item_id WHERE ut.user_id= ' . +$user_id;

$q = mysqli_query($connect, $cmd);
$count = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../design.css">
	<title>Document</title>
	<style>
		body {
			padding: 0;
			margin: 0;
			font-family: sans-serif;
			text-decoration: none;
		}

		* {
			cursor: auto;
		}

		.CartRow {
			border-radius: 10px;
			overflow: hidden;
			/* box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; */
			box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
			transition: all .3s;
		}

		.CartTable {
			border-collapse: separate;
			border-spacing: 0 30px;
			margin: auto;
			padding: 20px;
			text-align: center;
			border-radius: 10px;
			box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
			width: 80%;
		}

		.CartTable h1 {
			margin: 0;
			font-size: 70px;
			font-weight: 600;
			color: rgb(0, 0, 0, 0.9);
		}

		.CartRow .CartColumns {
			padding: 50px;
		}

		.cartimg img {
			width: 100%;
			height: 100%;
			border-radius: 10px 0px 0px 10px;
		}

		.cartimg {
			margin: 0;
			width: 160px;
			height: 180px;
			padding: 0;
		}

		.CartRow:hover {
			box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
		}

		.noItem {
			height: 100%;
			margin: 50px;
			color: black;
		}

		.noItem h3 {
			animation: clickhere infinite 1s ease-in-out;
		}

		@keyframes clickhere {
			0% {
				font-size: 20px;
			}

			50% {
				font-size: 20.5px;
			}

			100% {
				font-size: 20px;
			}
		}
	</style>
</head>

<body>
	<?php include('../navbar.php'); ?>
	<?php
	$sum = 0;

	$userp = mysqli_query($connect, $cmd);



	echo mysqli_num_rows($userp);
	if (mysqli_num_rows($userp) == 0) { ?>


		<div class="noItem">
			<h1>There are no items in your cart :(</h1><br><br>
			<h3><a href="../products/shop.php">click me to buy some ;)</a>
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
				// var_dump($row);
			?>
					<tr class="CartRow" onclick="location.href='productpages/jordanair4?id=<?php echo $row['id']; ?>'">
						<td class="cartimg"><img src="productimg/<?php echo $row['image']; ?>-1.jpg" alt="" srcset=""></td>
						<td class="CartColumns"><?php echo $row['name']; ?></td>
						<td class="CartColumns">₹<?php echo $row['price']; ?></td>
						<td class="CartColumns"><a href="delete_cart.php?id=<?php echo $row['id']; ?>">Remove</a></td>
					</tr>
				</a>

			<?php
			}
			?>
			<tr class="price">
				<td class="CartColumns" colspan="2">Total</td>
				<td class="CartColumms"> ₹<?php echo $sum;  ?></td>
				<td class="CartColumns"><a href="http://">Check Out</a></td>
			</tr>
		</table>
	<?php
	}
	include("../footer.php");
	?>

</body>

</html>