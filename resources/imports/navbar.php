<?php 
    include('resources/phpscripts/connect.php');
    $cmd = "SELECT * FROM user_cart WHERE user_id = ".$_SESSION['uid'];
    $q = mysqli_query($connect,$cmd);
    $items = mysqli_num_rows($q);
?>
<div class="navbarDiv">
        <div class="Branding">
<a href="index.php">
    <img class="brandlogo"src="resources/images/logo.png" alt="" srcset="">

</a>
            <!-- <a class="NavOpt" href="http://">ShoePlazza</a> -->
        </div>
    </div>
    <div class="NavCenter">
        <div class="NavContent">

            <a class="NavOpt" href="index.php">Home</a>
            <a class="NavOpt" href="shop.php">Shop</a>
            <a class="NavOpt" href="cart.php">My cart (<?php echo $items; ?>)</a>
            <a class="NavOpt" href="about.php">About</a>
        </div>
    </div>
    <div class="NavRight">
    <?php if(!isset($_SESSION['uid'])){ ?>

        <div class="NavContent"> 
          <a href="signin.php">Login</a>
        </div>
          <?php  
        } 
        else{
            $image = $_SESSION['pfp'];
            
            ?>
            <div class="NavPfp">
                <a href="profile.php">
                    <img class="Pfp" src="resources/pfp/<?php echo $image; ?>" alt="">
                </a>

            </div>
            <?php
        }
            ?>

    </div>


</div>