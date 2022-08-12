<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../design.css" />
  <link rel="stylesheet" href="../cursor.css">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
  <title>Sign up</title>
</head>

<body class="body">
  <div class="cursor"></div>
  <div class="innercursor"></div>


  <div class="center , signup">
    <div class="left">
      <h1>Hello there !</h1>
      <h2>Looks like you're new !! fill your information and get access to our site</h2>
      <?php
      if (isset($_SESSION['signuperror'])) {
        echo $_SESSION['signuperror'];
        unset($_SESSION['signuperror']);
      }
      ?>
    </div>
    <form method="post" name="loginform" action="chksignup.php" id="signupform">
      <div class="right">
        <h1>signup</h1>
        <div class="tab">
          <div class="txtfield">
            <input type="text" required name="fullname" class="idpassinput" oninput="input(0)" />
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

        <button type="button" class="button" id="signupbtn" onclick="current_tab(1)">next</button>
        <div class="signup">
          <input type="checkbox" id="showpass">
          <label class="showpassword" for="showpass">Show password</label>
          already a member ?<a href="signin.php">sign in</a>
        </div>
        <button type="button" class="button" id="prevbtn" onclick="current_tab(-1)">prev</button>
        <input type="submit" value="Submit" class="button" id="signupsubmit" style="display: none;">

      </div>
    </form>
  </div>
  <script src="Login.js"></script>
  <script src="../cursor.js"></script>
  <script src="signup.js"></script>
</body>

</html>