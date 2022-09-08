<?php
include('resources/phpscripts/connect.php');

session_start();
if (isset($_SESSION['uid'])) {
    $uid = $_SESSION['uid'];
    $command = "SELECT * FROM `login` WHERE id ='" . $uid . "';";
    $result = mysqli_query($connect, $command);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    $count = count($row) / 2;
    $imgpath = 'resources/pfp/' . $row['image'];
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
    <link rel="stylesheet" href="resources/css/design.css">
    <link rel="stylesheet" href="resources/css/imports.css">
    <title>Profile</title>
</head>

<body onbeforeunload=" return reload()">

<?php include('resources/imports/navbar.php'); ?>
    <form action="resources/phpscripts/updatescript.php" method="post" id="updateform" enctype="multipart/form-data">
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
                <fieldset class="leftWrapper">
                    <legend>Profile</legend>
                    <div class="txtfieldwrapper" >
                        <label for='fullname'>Full Name</label>
                        <input type='text' class='fields' name='fullname' value='<?php echo $row['fullname']; ?>' id='fullname' disabled required><br>
                    </div>
                    <div class="txtfieldwrapper" id="agewrapper">

                        <label for='age'>Age</label>
                        <input type='text' class='fields' name='age' value='<?php echo $row['age']; ?>' id='age' disabled required><br>
                    </div>
                    <div class="txtfieldwrapper" id="genderwrapper">

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
                    <div class="txtfieldwrapper" id="pwdwrapper">

                        <label for='password'>Password</label>
                        <input type='text' class='fields' name='password'    id='password' disabled required><br>
                    </div>
                    <div class="txtfieldwrapper" id="emailwrapper">

                        <label for='email'>Email</label>
                        <input type='text' class='fields' name='email' value='<?php echo $row['email']; ?>' id='email' disabled required><br>
                    </div>
                    <div class="txtfieldwrapper" id="mobilewrapper">

                        <label for='mobileno'>Mobile No</label>
                        <input type='text' class='fields' name='mobileno' value='<?php echo $row['mobile']; ?>' id='mobileno' disabled required><br>
                    </div>
                </fieldset>

            </div>
            <div class="right">
                <fieldset class="imgwrapper">
                    <legend id="pfplegend">profile pic</legend>
                    <?php
?>
                    <img src='<?php echo $imgpath; ?>' alt='cant load profile' name='profilepic'  class='profilepic' id='pfp' ondblclick='filebrowse()'>
                    <input type="file" name="avatar" id="filebrowse" onchange="readfile()" style="display: none;">
                    <input type="hidden" name="nofileupdate" value="<?php echo $row['image'] ?>">

                    <input type="button" value="Edit Profile" id="updatebtn" onclick="enable()" class="button">
                    <input type="button" value="submit" id="updatesubmit" onclick="validate()" class="button nodisplay">
                </fieldset>

            </div>
        </div>
    </form>
    <?php include('resources/imports/footer.php'); ?>
    <script src="resources/js/update.js"></script>
</body>

</html>