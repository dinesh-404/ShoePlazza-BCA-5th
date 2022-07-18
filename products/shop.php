<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css" />

    <title>Document</title>
</head>

<body>
    <!-- product one -->
    <div class="center">
        <div class="left" id="left">
            <div class="imgmain">
                <img src="\products\jordan4air\jordan4-1.jpg" alt="" srcset="" class="image">
                <img src="\products\jordan4air\jordan4-2.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgmain">
                <img src="\products\jordan4air\jordan4-3.jpg" alt="" srcset="" class="image">
                <img src="\products\jordan4air\jordan4-4.jpg" alt="" srcset="" class="image">
            </div>
            <div class="imgmain">
                <img src="\products\jordan4air\jordan4-5.jpg" alt="" srcset="" class="image">
                <img src="\products\jordan4air\jordan4-6.jpg" alt="" srcset="" class="image">
            </div>
        </div>
        <div class="right" id="right">
            <div class="noscroll" id="noscroll">
                <h1>Air Jordan 4</h1>
                <h6>black and white</h6>
                <p>
                    The Air Jordan 4 first took flight in 1989 as a more lightweight, breathable model compared to previous Air Jordan designs from Tinker Hatfield. Famously featuring its unique "wings" to allow for customised lace setups, the AJ4 is now back with all its special trimmings and an OG colour-blocked make-up for the summer. Similar to the classic blue style from decades ago, this 'White and Black' Air Jordan 4 goes for a more neutral white, black and Neutral Grey palette that's ready for any outfit.
                </p>
                
                <form action="cart.php" method="post">
                    <table class="shoptable">
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
                            <input type="radio" name="size" id="val9"required value="9" class='rbtn' onchange="radiocolor()">
                            <label class="radiolbl" for="val9">9</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="btncol">
                            <input type="radio" name="size" id="val10" required value="10" class='rbtn' onchange="radiocolor()">
                            <label class="radiolbl" for="val10">10</label>
                        </td>
                        <td class="btncol">
                            <input type="radio" name="size" id="val11"required value="11" class='rbtn' onchange="radiocolor()">
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
                <input type="text" name="price" class='price' id="price"readonly value="15000"><br>
                
                <input type="submit" value="Add to cart" class="addtocart">

                </form>
                <br>
                
                
            </div>
            
        </div>
        
    </div><br>
    <div class="down">down</div>
    <script src="products.js"></script>
    <script src="scroll.js"></script>
   
</body>

</html>