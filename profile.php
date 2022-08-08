<?php
include('loginstuff\connect.php');
session_start();
if (isset($_SESSION['uid'])) {
    echo "data in session is " . $_SESSION['uid'] . "<br>";
    $uid = $_SESSION['uid'];
    $command = "SELECT * FROM `login` WHERE username ='" . $uid . "';";
    $result = mysqli_query($connect, $command);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    print_r($row);
} else {
    echo "username not set";
}
if (isset($_REQUEST)) {
    echo "<br>request log<br>";
        print_r($row);
        $id = $uid;
        $uname = $_REQUEST['fullname'];
        $age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $updatecmd = "UPDATE `login` SET `fullname`='" . $uname . "',`age`='" . $age . "',`gender`='" . $gender . "',`username`='" . $username . "',`password`='" . $password . "',`address`='" . $address . "',`email`='" . $email . "',`mobile`='" . $mobile . "' WHERE `id`=$id";
        $updatedata = mysqli_query($connect, $updatecmd);
    
} else {
    echo "no requrst";
}
$uname = $_SESSION['username'];
$command = "SELECT * FROM `login` WHERE username ='" . $uname . "';";
$result = mysqli_query($connect, $command);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
print_r($row);
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

    <?php
    $count = count($row) / 2;
    $arr = ['', 'fullname', 'age', 'gender', 'username', 'password', 'address', 'email', 'mobile'];
    echo $arr[0];
    ?>
    <form action="profile.php" method="post">
        <?php
        for ($i = 1; $i < $count; $i++) {
            echo "<div class='container' >";
            echo "<label for='" . $arr[$i] . "'>" . $arr[$i] . "</label>";
            echo "<input type='text' class='fields' name='" . $arr[$i] . "' value='" . $row[$i] . "' disabled= >";
            echo "</div>";
        }
        ?>
        <input type="submit" value="submit">
    </form>

    <div class="crudbtn">
        <input type="button" value="update" id="updatebtn">
    </div>
    <script src="update.js"></script>
</body>

</html>