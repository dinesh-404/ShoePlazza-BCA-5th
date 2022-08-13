<?php
include('Login/connect.php');

session_start();
if (isset($_SESSION['uid'])) {
    $uid = $_SESSION['uid'];
    $command = "SELECT * FROM `login` WHERE id ='" . $uid . "';";
    $result = mysqli_query($connect, $command);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    $count = count($row) / 2;
    $imgpath = 'Login/pfp/' . $row['image'];
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
    <link rel="stylesheet" href="design.css">
    <title>Profile</title>
</head>
<body>
    <?php include('navbar.php'); ?>
    <form action="updatescript.php" method="post" id="updateform" enctype="multipart/form-data">
        <div class="container">
            <?php
            echo "<img src='$imgpath' alt=''";
            ?>
            <label for="avatar">Profile picture</label>
            <input type="file" name="avatar" class='fields' accept="image/*" disabled id=""><br>
            <?php
            for ($i = 1; $i < 9; $i++) {
                echo "<label for='" . $lbl[$i] . "'>" . $lbl[$i] . "</label>";
                echo "<input type='text' class='fields' name='" . $lbl[$i] . "' value='" . $row[$i] . "' id = '" . $lbl[$i] . "' disabled required ><br>";
            }
            ?>
            <input type="button" value="update" id="updatebtn" class="button">
            <input type="button" value="submit" onclick="validate()" class="button">
        </div>
    </form>
    <div class="crudbtn">
    </div>
    <script src="update.js"></script>
    <?php include('footer.php'); ?>
</body>

</html>