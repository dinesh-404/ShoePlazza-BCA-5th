<?php
include('loginstuff\connect.php');
session_start();
if (isset($_SESSION['uid'])) {
    echo "data in session is " . $_SESSION['uid'] . "<br>";
    $uid = $_SESSION['uid'];
    $command = "SELECT * FROM `login` WHERE id ='" . $uid . "';";
    $result = mysqli_query($connect, $command);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    $count =count($row)/2;
} else {
    echo "username not set";
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

    <?php 

    $lbl = ['', 'fullname', 'age', 'gender', 'username', 'password', 'address', 'email', 'mobile'];
    echo $lbl[1];
    ?>
    <form action="updatescript.php" method="post" id = "updateform">

        <?php
        for ($i = 1; $i < $count; $i++) {
            echo "<div class='container' >";
            echo "<label for='" . $lbl[$i] . "'>" . $lbl[$i] . "</label>";
            echo "<input type='text' class='fields' name='" . $lbl[$i] . "' value='" . $row[$i] . "' id = '".$lbl[$i]."' disabled required >";
            echo "</div>";
        }
        ?>
    </form>

    <div class="crudbtn">
        <input type="button" value="update" id="updatebtn">
        <input type="button" value="submit" onclick="validate()">
    </div>
    <script src="update.js"></script>
</body>

</html>