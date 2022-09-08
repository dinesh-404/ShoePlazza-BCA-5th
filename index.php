<?php
session_start();
include('resources/phpscripts/connect.php');
$cmd = "SELECT * FROM `items`";
$q = mysqli_query($connect, $cmd);
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
<link rel="stylesheet" href="resources/css/imports.css">
<style>

    .loader {
        display: inline-block;
        width: 30px;
        height: 30px;
        position: relative;
        border: 4px solid #Fff;
        top: 50%;
        animation: loader 2s infinite ease;
    }

    .loader-inner {
        vertical-align: top;
        display: inline-block;
        width: 100%;
        background-color: #fff;
        animation: loader-inner 2s infinite ease-in;
    }

    @keyframes loader {
        0% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(180deg);
        }

        50% {
            transform: rotate(180deg);
        }

        75% {
            transform: rotate(360deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes loader-inner {
        0% {
            height: 0%;
        }

        25% {
            height: 0%;
        }

        50% {
            height: 100%;
        }

        75% {
            height: 100%;
        }

        100% {
            height: 0%;
        }
    }

    .loadwrapper {
        position: fixed;
        z-index: 5;
        background: black;
        width: 100%;
        height: 100%;
        text-align: center;
    }
</style>
<title>Home Page</title>

</head>

<body class="body" id="body">
    <div class="loadwrapper" id='load'>

        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <?php
    include('resources/imports/navbar.php');
    include('resources/imports/top.php');


    ?>
    <div class="cursor"></div>
    <div class="innercursor"></div>
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
            <img src="resources/brandlogo/<?php echo $r1['brand']; ?>" class="logo" alt="jordan logo">
            <img src="resources/productimg/<?php echo $r1['image']; ?>-1.jpg" class="cardimg" alt="">
            <div class="cardtxt">
                <h2><?php echo $r1['name']; ?> </h2>
                <button onclick="location.href='productinfo.php?pid=<?php echo $r1['id']; ?>'">See More</button>
            </div>
        </div>
        <div class="card">
            <img src="resources/brandlogo/<?php echo $r2['brand']; ?>" class="logo" alt="jordan logo">

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
    <script src="resources/js/cursor.js">

    </script>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('load').style.display="none";
        });
    </script>

</body>

</html>