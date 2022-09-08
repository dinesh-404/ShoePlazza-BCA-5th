<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/design.css">
    <link rel="stylesheet" href="resources/css/imports.css">

    <style>
        * {
            cursor: auto;
        }
        .abg{
            height: 100%;
            width: 100%;
            background: url('resources/images/aboutbg.jpg');
            background-position: center;
            background-size: cover;
        }
        .text {
            width: 100%;
            height: 100%;
            font-family: "regular";
            background: rgb(255,255,255,.2);
            backdrop-filter: blur(20px);
        }

        .text p {
            padding: 30px;
            font-size: 30px;
            margin: 0;
        }

        .text p .button {
            border: none;
            font-size: 30px;
            background: none;
            transition: all .3s;
            border-radius: 10px;
        }

        .text p .button:hover {
            background: black;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
     include('resources/imports/navbar.php') ;
    include("resources/imports/cursor.php");

     ?>
    <div class="abg">


        <div class="text">
            <p>

                ShoePlazza is your place for athletic and easygoing shoes for the entire family from many name brands.<br>
                You’ll discover styles for ladies, men and children from brands like Nike, Converse, Vans, Sperry, Madden Girl, Skechers, ASICS and then some! With stores in the U.S. furthermore, Canada and much more choice online <br>

                ShoePlazza is a main family footwear goal for the popular brands you know and love.
                For each one of those shoe sweethearts out there, ‘ShoePlazza’ offer the one-stop goal to pick the correct match of footwear. To satisfy the affection for shoes, we offer heaps of alternatives from driving footwear marks, all under one rooftop. Gone are the days when you needed to go from store to store to locate the correct style and size for yourself. <br> <br>
                So What are you waiting for
                <button class="button" onclick="location.href='shop.php'">Shop Now</button>
            </p><br>

        </div>
    </div>
    <?php include('resources/imports/footer.php') ?>
</body>

</html>