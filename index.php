<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="design.css">
</head>

<body class="body" ,id="body">
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
   
    <script src="test.js"></script>

    <button>cluck</button>
    <div class="cursor"></div>
    <div class="center" style="display: none;">
        <div class="left">
            <h1>Hello there !</h1>
            <h2>login here to get access to your account and more...</h2>
        </div>

        <form method="post" name="loginform" action="chklogin.php" id="form">
            <div class="right">
                <h1>Login</h1>

                <div class="txtfield">
                    <input type="text" required name="username" class="idpassinput" />
                    <label class="idpasslbl">Username</label>
                </div>
                <div class="txtfield">
                    <input type="password" required name="password" class="idpassinput" id="pass" />
                    <label class="idpasslbl">password</label>
                </div>

                <input type="submit" value="login" class="button" />
                <div class="signup">
                    <input type="checkbox" id="showpass">
                    <label class="showpassword" for="showpass">Show password</label>
                    not a member ?<a href="signup.php">sign up</a>
                </div>

            </div>
        </form>

    </div>
</body>

</html>