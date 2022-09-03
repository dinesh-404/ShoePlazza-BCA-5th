<?php
session_start();
include("../../Login/connect.php");
if(!isset($_REQUEST['id'])) header('location:/ShoePlazza/products/shop.php');
else{

    $id = $_REQUEST['id'];

    $q = "SELECT * FROM `items` WHERE id = " . +$id;
    $cmd = mysqli_query($connect, $q);
    $r = mysqli_fetch_array($cmd);
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css" />
    <link rel="stylesheet" href="/ShoePlazza/cursor.css">
    <link rel="stylesheet" href="/ShoePlazza/design.css">

    <title>jordanair4</title>
</head>

<body>

    <!-- product one -->
    <div class="cursor"></div>
    <div class="innercursor"></div>
    <?php include('../../navbar.php'); ?>
    <div class="pcenter">
       
        <div class="pleft" id="left">

            <div class="imgmain">
                <img src="\ShoePlazza\products\productimg\<?php echo $r['image']; ?>-1.jpg" alt="" srcset="" class="image">
                <img src="\ShoePlazza\products\productimg\<?php echo $r['image']; ?>-2.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgmain">
                <img src="\ShoePlazza\products\productimg\<?php echo $r['image']; ?>-3.jpg" alt="" srcset="" class="image">
                <img src="\ShoePlazza\products\productimg\<?php echo $r['image']; ?>-4.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgmain">
                <img src="\ShoePlazza\products\productimg\<?php echo $r['image']; ?>-5.jpg" alt="" srcset="" class="image">
                <img src="\ShoePlazza\products\productimg\<?php echo $r['image']; ?>-6.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgwide">
                <img src="\ShoePlazza\products\productimg\<?php echo $r['image']; ?>-7.jpg" alt="" class="wideimage">
            </div>
        </div>
        <div class="pright" id="right">
            <div class="noscroll" id="noscroll">
                <h1><?php echo $r['name']; ?></h1>
                <p>
                    <?php
                    echo $r['information'];
                    ?>
                    <!-- The Air Jordan 4 first took flight in 1989 as a more lightweight, breathable model compared to previous Air Jordan designs from Tinker Hatfield. Famously featuring its unique "wings" to allow for customised lace setups, the AJ4 is now back with all its special trimmings and an OG colour-blocked make-up for the summer. Similar to the classic blue style from decades ago, this 'White and Black' Air Jordan 4 goes for a more neutral white, black and Neutral Grey palette that's ready for any outfit. -->
                </p>
                <div class="rate">
                    rs.
                    <?php

                    echo $r['price'];
                    ?>
                    only
                </div>

                <a href="../add_to_cart.php?id=<?php echo $r['id']; ?>" role="button">Add to Cart</a>
            </div>
        </div>
    </div><br>
    <script src="/ShoePlazza/cursor.js"></script>
    <script src="products.js"></script>
    <script src="scroll.js"></script>

</body>

</html>