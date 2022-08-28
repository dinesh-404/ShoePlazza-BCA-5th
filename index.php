<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="cursor.css">
<title>Home Page</title>

</head>

<body class="body" id="body">
    <div class="cursor"></div>
    <div class="innercursor"></div>
    <?php
    // include('navbar.php'); 
    ?>
    <div class="content"><br><br>
        Hello !! <br>
        Welcome to ShoePlazza<br>
        <button type="button" class="button" id="button" onclick="explore()">Explore</button>
    </div>
    <h1 id="explore">Featured</h1><br>
    <div class="explore">
        <div class="cards">
            <div class="cardinfo">
                <img src="images/jordan.png" class="cardlogo" alt="">
                <img src="products/productimg/airjordan7/airjordan7-1.jpg" class="pimage" alt="" srcset="">
                    <div class="txt">
                       <h2> Jordan Air 7</h2>
                        <button type="button" class="button">View More</button>
                    </div>
            </div>
        </div>
        <div class="cards">
            <div class="cardinfo">
                <img src="products/productimg/airjordan7/airjordan7-1.jpg"  class="pimage"alt="" srcset="">
                <div class="txt">
                    <!-- New Collection from addidas<br> -->
                    <button type="button" class="button">View More</button>
                </div>
            </div>
        </div>
    </div>
<div class="panel">
    <img src="images/nike.png" class="nike" alt="" srcset="">
    <button class="button">Shop now</button>
</div>
    <?php include('footer.php'); ?>

    <script src="cursor.js"></script>
    <div id="ok">okok</div>
</body>

</html>