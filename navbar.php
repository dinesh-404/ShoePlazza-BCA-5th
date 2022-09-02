<div class="navbarDiv">


    <!-- <li class="brand">ShoePlazza</li>
        <li class="NavOpt"><a href="index.php">Home</a></li>
        <li class="NavOpt"><a href="products/shop.php">Products</a></li>
        <li class="NavOpt"> <a href="aboutus.html">About us</a></li>
        <li class="NavOpt"><a href="contactus.html">Contact us</a></li>
        <li class="NavOpt"><a href="http://">Login</a></li> -->
    <div class="NavLeft">
        <div class="Branding">
<a href="/ShoePlazza/index.php">
    <img class="brandlogo"src="/ShoePlazza/images/logo.png" alt="" srcset="">

</a>
            <!-- <a class="NavOpt" href="http://">ShoePlazza</a> -->
        </div>
    </div>
    <div class="NavCenter">
        <div class="NavContent">

            <a class="NavOpt" href="/ShoePlazza/index.php">Home</a>
            <a class="NavOpt" href="/ShoePlazza/about.php">About</a>
            <a class="NavOpt" href="/ShoePlazza/contact.php">Contact</a>
            <a class="NavOpt" href="/ShoePlazza/products/shop.php">Shop</a>
        </div>
    </div>
    <div class="NavRight">
    <?php if(!isset($_SESSION['uid'])){ ?>

        <div class="NavContent"> 
          <a href="/ShoePlazza/Login/signin.php">Login</a>
        </div>
          <?php  
        } 
        else{
            $image = $_SESSION['pfp'];
            
            ?>
            <div class="NavPfp">
                <a href="/ShoePlazza/profile.php">
                    <img class="Pfp" src="/ShoePlazza/Login/pfp/<?php echo $image; ?>" alt="">
                </a>

            </div>
            <?php
        }
            ?>

    </div>


</div>