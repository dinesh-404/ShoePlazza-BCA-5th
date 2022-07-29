<ul class="navbar">
    <li><a href="products.html">products</a></li>
    <li><a href="aboutus.html">about us</a></li>
    <li><a href="contactus.html">Contact us</a></li>
    <li><a href="index.php">Home</a></li>
    <li class="dropdown">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
        ?>
            <div class=btn><?php echo $_SESSION['username']; ?>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <button id='logbtn'>ok</button>
                </div>
    </li>
<?php } else { ?>
    <a href="/loginstuff/signin.php">login</a>
<?php } ?>
</ul>
<script src="cursor.js"></script>
