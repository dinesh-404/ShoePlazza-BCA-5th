<?php
session_start();
include('resources/phpscripts/connect.php');
$cmd = "SELECT * FROM `items`";
$q = mysqli_query($connect, $cmd);
var_dump($q);
$max = mysqli_num_rows($q) - 1;
$min = 0;
$row =  mysqli_fetch_all($q, MYSQLI_ASSOC);
$random1 =   rand($min, $max);
$random2 =   rand($min, $max);
if ($random1 == $random2) {
    if ($random1 >= 0 && $random1 < $max) {
        $random1++;
    } else {
        $random1--;
    }
}
$r1 = $row[$random1];
$r2 = $row[$random2];


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
        <img src="resources/brandlogo/<?php echo $r1['brand'];?>" class="logo" alt="jordan logo">
            <img src="resources/productimg/<?php echo $r1['image']; ?>-1.jpg" class="cardimg" alt="">
            <div class="cardtxt">
                <h2><?php echo $r1['name']; ?> </h2>
                <button onclick="location.href='productinfo.php?pid=<?php echo $r1['id']; ?>'">See More</button>
            </div>
        </div>
        <div class="card">
            <img src="resources/brandlogo/<?php echo $r2['brand'];?>" class="logo" alt="jordan logo">

            <img src="resources/productimg/<?php echo $r2['image']; ?>-1.jpg" class="cardimg" alt="">
            <div class="cardtxt">
                <h2><?php echo $r2['name']; ?> </h2>
                <button onclick="location.href='productinfo.php?pid=<?php echo $r2['id']; ?>'">See More</button>
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