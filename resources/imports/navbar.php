<?php
include('resources/phpscripts/connect.php');
if (isset($_SESSION['uid'])) {
    
    $navcmd = "SELECT * FROM user_cart WHERE user_id = " .$_SESSION['uid'];
    $pfpcmd = "SELECT `image` FROM `login` WHERE id=".$_SESSION['uid'];
    $pfpq = mysqli_query($connect,$pfpcmd);
    $img = mysqli_fetch_array($pfpq);
    $navq = mysqli_query($connect, $navcmd);
    $navitems = mysqli_num_rows($navq);
} else {
    $navitems = 0;
}
?>
<div class="navbarDiv">
    <div class="NavLeft">
        <div class="Branding">
            <a href="index.php">
                <img class="brandlogo" src="resources/images/logo.png" alt="" srcset="">

            </a>
        </div>
    </div>
    <div class="NavCenter">
        <div class="NavContent">

            <a class="NavOpt" href="index.php">Home</a>
            <a class="NavOpt" href="shop.php">Shop</a>
            <a class="NavOpt" href="cart.php">My cart (<?php echo $navitems; ?>)</a>
            <a class="NavOpt" href="about.php">About</a>
        </div>
    </div>
    <div class="NavRight">
        <?php if (!isset($_SESSION['uid'])) { ?>

            <div class="navLogin">
                <a href="signin.php">Login</a>
            </div>
        <?php
        } else {
           

        ?>
            <div class="NavPfp">
                <a href="profile.php">
                    <img class="Pfp" src="resources/pfp/<?php echo $img['image']; ?>" alt="">
                </a>
            </div>
            <a class="NavLogout" href="resources/phpscripts/logout.php">log out</a>
        <?php
        }
        ?>

    </div>


</div>