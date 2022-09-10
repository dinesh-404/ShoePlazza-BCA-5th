<?php
session_start();
if (isset($_SESSION['uid'])) {
  header('location:/ShoePlazza/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/login.css" />
  <link rel="stylesheet" href="resources/css/design.css" />
  <link rel="stylesheet" href="resources/css/imports.css">

  <title>Sign in</title>
</head>

<body class="body login">
  <?php
  include("resources/imports/cursor.php");
  ?>
  <div id="afteranimation">

    <?php
    include('resources/imports/navbar.php');

    ?>


    <div class="center">

      <div class="left">
        <h1>Hello there !</h1>
        <h2>login here to get access to your account and more...</h2>

        <h2>not a member ?<a href="signup.php">sign up</a></h2>
      </div>

      <form method="post" name="loginform" action="resources/phpscripts/chklogin.php" id="form">
        <div class="right">
          <h1>Login</h1>
          <div class="txtfield">
            <input type="text" required name="username" class="idpassinput" autofocus />
            <label class="idpasslbl">Username</label>
          </div>
          <div class="txtfield">
            <input type="password" required name="password" class="idpassinput" id="pass" />
            <label class="idpasslbl">password</label>
            <button type="button" class="showpwd" onclick="showpass()"><img src="resources/images/eyeclosed.png" alt="eyeclosed" id="pwdimg"></button>
          </div>
          <div class="signup">
            <input type="submit" value="Login" class="button loginbtns">
          </div>
        </div>
      </form>
    </div>
    <?php include('resources/imports/footer.php'); ?>
  </div>
  <script src="resources/js/login.js"></script>
  <script src="resources/js/cursor.js"></script>
</body>

</html>