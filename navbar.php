<ul class="navbar" id="navbar">
    <li><a href="index.php">Home</a></li>
    <li><a href="products/shop.php">Products</a></li>
    <li class="dropdown">
       <?php
       if(!isset($_SESSION['uid'])){
        
        ?> <a href="Login/signin.php">Login</a> <?php 

       }
       ?>
   
    <li><a href="aboutus.html">About us</a></li>
    <li><a href="contactus.html">Contact us</a></li>
</ul>

