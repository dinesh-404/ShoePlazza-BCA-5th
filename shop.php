<?php
include("resources/phpscripts/connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/shop.css">
    <link rel="stylesheet" href="resources/css/cursor.css">
    <link rel="stylesheet" href="resorces/css/products.css">

    <title>shop</title>
</head>

<body>
    <?php include("resources/imports/navbar.php"); ?>
    <div class="cursor"></div>
    <div class="innercursor"></div>
    <div class="cardrow" id="nike">
        <?php
        $cmd = "SELECT * FROM `items`";
        $q = mysqli_query($connect,$cmd);
        $n = mysqli_num_rows($q);
        $r= mysqli_fetch_all($q,MYSQLI_ASSOC);
       
        for ($i=0; $i < $n; $i++) {
            
            ?>
            
            <div class="card">
                <div class="cardimage">
                    <div class="imgtxt">
                        <h1><?php echo $r[$i]['name']; ?></h1>
                        <p>Price : <?php echo $r[$i]['price']; ?></p>
                    </div>
                    <img src="resources/productimg/<?php echo $r[$i]['image'];  ?>-1.jpg" alt="" srcset="">
    
                </div>
                <a class="linkbtn" href="productinfo.php?pid=<?php echo $r[$i]['id'];  ?>">see more</a>
            </div>
            <?php 
        } ?>
    </div>
    <?php include('resources/imports/footer.php') ?>
    <script src="resources/js/cursor.js"></script>
</body>

</html>