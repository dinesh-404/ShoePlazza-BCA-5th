<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="\design.css" />
  <link rel="stylesheet" href="\cursor.css">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">

  <title>Login</title>
</head>

<body class="body" style="margin-top: 20px;">
  <div class="cursor"></div>
  <div class="innercursor"></div>
  <div class="center">
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
        <div class="signup">
          <br><br>
          <input type="checkbox" id="showpass">
          <label class="showpassword" for="showpass">Show password</label>
          <br><br>not a member ?<a href="signup.php">sign up</a>
          <input type="submit" value="Login" class="button">
        </div>
      </div>
    </form>
  </div>
  <script src="loginthings.js"></script>
  <script src="\cursor.js"></script>
</body>
</html>