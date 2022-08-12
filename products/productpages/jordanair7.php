<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css" />
    <link rel="stylesheet" href="\ShoePlazza\cursor.css">
    <title>jordanair4</title>
</head>

<body>
    <!-- product one -->
    <div class="cursor"></div>
    <div class="innercursor"></div>
    <div class="center">
        <div class="left" id="left">
            <div class="imgmain">
                <img src="\products\productimg\airjordan7\airjordan7-1.jpg" alt="" srcset="" class="image">
                <img src="\products\productimg\airjordan7\airjordan7-2.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgmain">
                <img src="\products\productimg\airjordan7\airjordan7-3.jpg" alt="" srcset="" class="image">
                <img src="\products\productimg\airjordan7\airjordan7-4.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgmain">
                <img src="\products\productimg\airjordan7\airjordan7-5.jpg" alt="" srcset="" class="image">
                <img src="\products\productimg\airjordan7\airjordan7-6.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgwide">
                <img src="\products\productimg\jordan4-7.jpg" alt="" class="wideimage">
            </div>
        </div>
        <div class="right" id="right">
            <div class="noscroll" id="noscroll">
                <h1>Air Jordan 7</h1>
                <h6>the gold</h6>
                <p>
                    Inspired by the shoe originally worn by MJ during the '92 season and summer of basketball, the Air Jordan 7 Retro revives its championship legacy for a new generation of sneakerheads.
                </p>

                <form action="cart.php" method="post">
                    <table class="shoptable">
                        <h2>Size</h2>
                        <tr>
                            <td class="btncol">
                                <input type="radio" name="size" id="val6" required value="6" class='rbtn' onchange="radiocolor()">
                                <label class="radiolbl" for="val6">6</label>
                            </td>
                            <td class="btncol">
                                <input type="radio" name="size" id="val7" required value="7" class='rbtn' onchange="radiocolor()">
                                <label class="radiolbl" for="val7">7</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="btncol">
                                <input type="radio" name="size" id="val8" required value="8" class='rbtn' onchange="radiocolor()">
                                <label class="radiolbl" for="val8">8</label>
                            </td>
                            <td class="btncol">
                                <input type="radio" name="size" id="val9" required value="9" class='rbtn' onchange="radiocolor()">
                                <label class="radiolbl" for="val9">9</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="btncol">
                                <input type="radio" name="size" id="val10" required value="10" class='rbtn' onchange="radiocolor()">
                                <label class="radiolbl" for="val10">10</label>
                            </td>
                            <td class="btncol">
                                <input type="radio" name="size" id="val11" required value="11" class='rbtn' onchange="radiocolor()">
                                <label class="radiolbl" for="val11">11</label>
                            </td>
                        </tr>
                    </table><br>

                    <input type="hidden" name="productname" value="airjordan4">

                    <input type="hidden" name="price" value="20000">
                    <button type="button" class="qtybtn" onclick="quantity(1)">+</button>
                    <input type="text" name="qty" readonly value="1" class="qty" id="qty">
                    <button type="button" class="qtybtn" onclick="quantity(-1)">-</button><br>
                    <label for="price">price</label>
                    <input type="text" name="price" class='price' id="price" readonly value="15000"><br>

                    <input type="submit" value="Add to cart" class="addtocart">

                </form>
                <br>
            </div>
        </div>
    </div><br>

    <script src="\ShoePlazza\cursor.js"></script>
    <script src="products.js"></script>
    <script src="scroll.js"></script>

</body>

</html>