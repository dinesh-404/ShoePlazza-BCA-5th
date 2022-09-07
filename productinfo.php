<?php
session_start();
include("resources/phpscripts/connect.php");
$status = 1;

if(!isset($_GET['pid'])) header('location:shop.php');
$pid = $_REQUEST['pid'];

if(isset($_SESSION['uid'])){
    
    
    $usr = $_SESSION['uid'];
    $qc = "SELECT status FROM user_cart WHERE user_id ='".$usr."' AND item_id= '".$pid."'";
    
    $pcmd = mysqli_query($connect,$qc);
    $status =mysqli_num_rows($pcmd);
    var_dump($status);
   
}
$q = "SELECT * FROM `items` WHERE id = '".$pid."'";
$cmd = mysqli_query($connect, $q);
$r = mysqli_fetch_array($cmd);
var_dump($r);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/products.css" />
    <link rel="stylesheet" href="resources/css/cursor.css">
    <link rel="stylesheet" href="resources/css/imports.css">

    <title>jordanair4</title>
</head>

<body>

    <!-- product one -->
    <div class="cursor"></div>
    <div class="innercursor"></div>
    <?php include('resources/imports/navbar.php'); ?>
    <div class="pcenter">
       
        <div class="pleft" id="left">

            <div class="imgmain">
                <img src="resources/productimg/<?php echo $r['image']; ?>-1.jpg" alt="" srcset="" class="image">
                <img src="resources/productimg/<?php echo $r['image']; ?>-2.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgmain">
                <img src="resources/productimg/<?php echo $r['image']; ?>-3.jpg" alt="" srcset="" class="image">
                <img src="resources/productimg/<?php echo $r['image']; ?>-4.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgmain">
                <img src="resources/productimg/<?php echo $r['image']; ?>-5.jpg" alt="" srcset="" class="image">
                <img src="resources/productimg/<?php echo $r['image']; ?>-6.jpg" alt="" srcset="" class="image">
            </div>
           
        </div>
        <div class="pright" id="right">
            <div class="noscroll" id="noscroll">
                <h1><?php echo $r['name']; ?></h1>
                <p>
                    <?php
                    echo $r['information'];
                    ?>
                   
                </p>
                <br>
                <div class="rate">
                    <h2>₹

                    <?php

                    echo $r['price'];
                    ?>
                    only
                    </h2>

                </div>
                <?php 
                
                if($status>0){
                    ?>
               <button class="cartbtn" disabled >added to cart</button>
<?php
                }
                else{
                    
                    echo $r['id'];
                    ?>

               <button class="cartbtn" onclick="location.href='resources/phpscripts/add_to_cart.php?pid=<?php echo $r['id'];  ?>'" >Add to Cart</button>
                <?php } ?>
            </div>
        </div>
    </div><br>
    <?php include('resources/imports/footer.php'); ?>
    <script src="resources/js/cursor.js"></script>
    <script src="resources/js/products.js"></script>
    <script src="resources/js/scroll.js"></script>

</body>

</html>