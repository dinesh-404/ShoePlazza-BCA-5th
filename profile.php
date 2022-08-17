<?php
include('Login/connect.php');

session_start();
if (isset($_SESSION['uid'])) {
    $uid = $_SESSION['uid'];
    $command = "SELECT * FROM `login` WHERE id ='" . $uid . "';";
    $result = mysqli_query($connect, $command);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    $count = count($row) / 2;
    $imgpath = '/ShoePlazza/Login/pfp/' . $row['image'];
    $lbl = ['', 'fullname', 'age', 'gender', 'username', 'password', 'address', 'email', 'mobile'];
} else {
    header('location:Login/signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ShoePlazza/design.css">
    <style>
        * {
            cursor: auto;
        }
    </style>
    <title>Profile</title>
</head>

<body>
    <form action="updatescript.php" method="post" id="updateform" enctype="multipart/form-data">
        <div class="profile">
            <h1 id="profilehead">User Profile</h1>
            <div class="profiletext">
                <h1>Hello <?php echo $row['username']; ?></h1>
                This is your profile page.<br>
                Here you can edit your personal information<br>
            </div>
            <button type="button" class="button" onclick='scrollupdate()'>View Profile</button>
        </div>
        <div class="ProfileWrapper">
            <div class="left">

                <div class="txtfieldwrapper">
                    <label for='fullname'>Full Name</label>
                    <input type='text' class='fields' name='fullname' value='<?php echo $row['fullname']; ?>' id='fullname' disabled required><br>
                </div>
                <div class="txtfieldwrapper">

                    <label for='age'>Age</label>
                    <input type='text' class='fields' name='age' value='<?php echo $row['age']; ?>' id='age' disabled required><br>
                </div>
                <div class="txtfieldwrapper">

                    <label for='gender'>Gender</label>
                    <input type='text' class='fields' name='gender' value='<?php echo $row['gender']; ?>' id='gender' disabled required><br>
                </div>
                <div class="txtfieldwrapper">

                    <label for='address'>address</label>
                    <input type='text' class='fields' name='address' value='<?php echo $row['address']; ?>' id='address' disabled required><br>
                </div>
                <div class="txtfieldwrapper">

                    <label for='username'>Username</label>
                    <input type='text' class='fields' name='username' value='<?php echo $row['username']; ?>' id='username' disabled required><br>
                </div>
                <div class="txtfieldwrapper">

                    <label for='password'>Password</label>
                    <input type='text' class='fields' name='password' value='<?php echo $row['password']; ?>' id='password' disabled required><br>
                </div>
                <div class="txtfieldwrapper">

                    <label for='email'>Email</label>
                    <input type='text' class='fields' name='email' value='<?php echo $row['email']; ?>' id='email' disabled required><br>
                </div>
                <div class="txtfieldwrapper">

                    <label for='mobileno'>Mobile No</label>
                    <input type='text' class='fields' name='mobileno' value='<?php echo $row['mobile']; ?>' id='mobileno' disabled required><br>
                </div>
     

                    <!-- <input type="button" value="update" id="updatebtn" onclick="enable()" class="button">
                    <input type="button" value="submit" onclick="validate()" class="button"> -->
                
            </div>
            <div class="right">
                <?php

                if (strlen($row['image']) == 0) {
                ?>
                    <input type="file" name="avatar" class='fields' accept="image/*" disabled id="" style="display: none;"><br>
                <?php
                } else {
                    echo "<img src='$imgpath' alt='profilepic' class='profilepic' ondblclick='filebrowse()'><br>";
                }
                ?>
                <input type="file" name="file" id="filebrowse" style="display: none;">
                <input type="button" value="update" id="updatebtn" onclick="enable()" class="button">
                    <input type="button" value="submit" onclick="validate()" class="button">
            </div>
        </div>

        <!-- <div class="container">
                <label for="profilepic">Profile Picture</label>
                <?php

                // if (strlen($row['image']) == 0) {
                // 
                ?>
                //     <input type="file" name="avatar" class='fields' accept="image/*" disabled id=""><br>
                // <?php
                    // } else {
                    //     echo "<img src='$imgpath' alt='profilepic' class='profilepic'><br>";
                    // }
                    ?>

                <label for='fullname'>Full Name</label>
                <input type='text' class='fields' name='fullname' value='<?php echo $row['fullname']; ?>' id='fullname' disabled required><br>

                <label for='age'>Age</label>
                <input type='text' class='fields' name='age' value='<?php echo $row['age']; ?>' id='age' disabled required><br>

                <label for='gender'>Gender</label>
                <input type='text' class='fields' name='gender' value='<?php echo $row['gender']; ?>' id='gender' disabled required><br>

                <label for='address'>address</label>
                <input type='text' class='fields' name='address' value='<?php echo $row['address']; ?>' id='address' disabled required><br>

                <label for='username'>Username</label>
                <input type='text' class='fields' name='username' value='<?php echo $row['username']; ?>' id='username' disabled required><br>

                <label for='password'>Password</label>
                <input type='text' class='fields' name='password' value='<?php echo $row['password']; ?>' id='password' disabled required><br>

                <label for='email'>Email</label>
                <input type='text' class='fields' name='email' value='<?php echo $row['email']; ?>' id='email' disabled required><br>

                <label for='mobileno'>Mobile No</label>
                <input type='text' class='fields' name='mobileno' value='<?php echo $row['mobile']; ?>' id='mobileno' disabled required><br>

                <input type="button" value="update" id="updatebtn" class="button">
                <input type="button" value="submit" onclick="validate()" class="button">
            </div> -->
    </form>
    <script src="update.js"></script>
    <br><br>
    <?php include('footer.php'); ?>
</body>

</html>