<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/design.css">
    <link rel="stylesheet" href="resources/css/imports.css">
    <title>About Page</title>
</head>

<body>
    <?php
    include('resources/imports/navbar.php');
    include("resources/imports/cursor.php");
    ?>
    <div class="abg">
        <div class="text">
            <p> ShoePlazza is your place for athletic and easygoing shoes for the entire family from many named brands.
                You’ll discover styles for ladies, men and children from brands like Nike, Converse, Vans, Sperry, Madden Girl, Skechers, ASICS and then some! With stores in the U.S. furthermore, Canada and much more choice online
            </p>
            <br>
            <p>
                ShoePlazza is a main family footwear goal for the popular brands you know and love.
                For each one of those shoe sweethearts out there, ‘ShoePlazza’ offer the one-stop goal to pick the correct match of footwear. To satisfy the affection for shoes, we offer heaps of alternatives from driving footwear marks, all under one rooftop. Gone are the days when you needed to go from store to store to locate the correct style and size for yourself. <br> <br>
                So What are you waiting for
                <button class="button" onclick="location.href='shop.php'">Shop Now</button>
            </p>
        </div>
        <?php include('resources/imports/footer.php') ?>
        <script src="resources/js/cursor.js">
        </script>
</body>

</html>