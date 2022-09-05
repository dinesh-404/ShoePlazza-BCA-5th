<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/design.css" />
  <link rel="stylesheet" href="resources/css/cursor.css">
  <link rel="stylesheet" href="resources/css/imports.css">
  <title>Sign up</title>
</head>

<body class="body login">
  <?php include('../navbar.php'); ?>
  <div class="cursor"></div>
  <div class="innercursor"></div>
  <div class="center">
    <div class="left">
      <h1>Hello there !</h1>
      <h2>Looks like you're new !! fill your information and get access to our site</h2>
      <h2>already a member ?<a href="signin.php">sign in</a></h2>
      <?php
      if (isset($_SESSION['signuperror'])) {
        echo $_SESSION['signuperror'];
        unset($_SESSION['signuperror']);
      }
      ?>
    </div>
    <form method="post" name="loginform" action="resources/phpscripts/chksignup.php" id="signupform">
      <div class="right">
        <h1>signup</h1>
        <div class="tab">
          <div class="txtfield">
            <input type="text" required name="fullname" class="idpassinput" oninput="input(0)" autofocus />
            <label class="idpasslbl">Full Name</label>
          </div>
          <div class='radio' onchange="radioval()">
            <label style="display:block;">Gender</label>
            <div>
              <input type="radio" name="gender" id="male" value="male" class="ok">
              <label for="male">Male</label>
            </div>
            <div>
              <input type="radio" name="gender" id="female" value="female" class="ok">
              <label for="female">female</label>
            </div>
            <div>
              <input type="radio" name="gender" id="other" value="other" class="ok">
              <label for="other">other</label>
            </div>
          </div>
          <div class="txtfield">
            <input type="text" required name="age" class="idpassinput" oninput="input(1)" id="age" />
            <label class="idpasslbl">age</label>
          </div>
          <div class="txtfield">
            <input type="text" required name="email" class="idpassinput" oninput="input(2)" id="mail" />
            <label class="idpasslbl">Email-address</label>
          </div>
        </div>
        <div class="tab">
          <div class="txtfield">
            <input type="text" required name="username" class="idpassinput" oninput="input(3)" />
            <label class="idpasslbl">Username</label>
          </div>
          <div class="txtfield">
            <input type="password" required name="password" class="idpassinput" id="pass" oninput="input(4)" />
            <label class="idpasslbl">password</label>
            <button type="button" class="showpwd" onclick="showpass()"><img src="resources/images/eyeclosed.png" alt="eyeclosed" id="pwdimg"></button>

          </div>
          <div class="txtfield">
            <input type="txtfield" required name="mobilenumber" id="mobileno" class="idpassinput" oninput="input(5)" />
            <label class="idpasslbl">Mobile no</label>
          </div>
          <div class="txtfield" style="border:none;">
            <textarea class="txtarea" required name="address"></textarea>
            <label class="idpasslbl">Address</label>
          </div>
        </div>

        <button type="button" class="button loginbtns" id="signupbtn" onclick="current_tab(1)">next</button>
        <button type="button" class="button loginbtns" style="bottom:20px" id="prevbtn" onclick="current_tab(-1)">previous</button>
        <!-- <input type="submit" value="Submit" class="button" id="submitbtn" style="display: none;"> -->

      </div>
    </form>
  </div>
  <?php include('resources/imports/footer.php'); ?>
  <script src="resources/js/Login.js"></script>
  <script src="resources/js/cursor.js"></script>
  <script src="resources/js/signup.js"></script>
</body>

</html>