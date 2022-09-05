<?php
    session_start();
    include('resources/phpscripts/connect.php');
    $cmd = "SELECT * FROM `items`";
    $q = mysqli_query($connect,$cmd);
    var_dump($q);

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="resources/css/design.css">
<link rel="stylesheet" href="resources/css/cursor.css">
<title>Home Page</title>

</head>

<body class="body" id="body">
    
    <?php 
    include('resources/imports/navbar.php');
    include('resources/imports/top.php');

    
    ?>
    <div class="cursor"></div>
    <div class="innercursor"></div>
    <?php
    // include('navbar.php'); 
    ?>
    <div class="content"><br><br>
        <h2>

            Hello !! <br>
            Welcome to ShoePlazza<br>
        </h2>
        <button type="button" class="button" id="button" onclick="explore()">Explore</button>
    </div>
    <h1 id="explore">Featured</h1><br>

    <div class="explore">
        <div class="card">
            <img src="resources/images/jordan.png" class="logo" alt="jordan logo">
            <img src="" class="cardimg" alt="">
            <div class="cardtxt">
                <h2>Jordan Air 4 </h2>
                <button>See More</button>
            </div>
        </div>
        <div class="card">
            <img src="images/jordan.png" class="logo" alt="jordan logo">

            <img src="products/productimg/airjordan7/airjordan7-1.jpg" class="cardimg" alt="">
            <div class="cardtxt">
                <h2>Jordan Air Retro</h2>
                <button>See More</button>
            </div>
        </div>
    </div>

    <div class="panel" id="pannike">
        <img src="resources/images/nikenobg.png" class="brand" alt="" srcset="">
        <button class="button" onclick="header('location:/ShoePlazza/index.php');
">Shop now</button>
    </div><br>
    <div class="panel" id="panaddidas">
        <img src="resources/images/addidashome.png" class="brand" alt="" srcset="">
        <button class="button">Shop now</button>
    </div>
    <?php include('resources/imports/footer.php'); ?>

    <script src="resources/js/cursor.js"></script>
    <div id="ok">okok</div>
</body>

</html>