<?php
    include('loginstuff\connect.php');
    session_start();
    if(isset($_SESSION['username'])){
        echo "data in session is ".$_SESSION['username']."<br>";
        $uname = $_SESSION['username'];
        $command = "SELECT * FROM `login` WHERE username ='".$uname."';";
        $result = mysqli_query($connect,$command);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        print_r($row);
    }
    else{
        echo "username not set";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            display: block;
            height: 50px;
            width: 50%;
            margin: auto;
            font-size: 30px;
        }
    </style>
    <title>Profile</title>
</head>
<body>
    
        <?php
            $count = count($row)/2;
            $arr = ['userid','Fullname','age','gender','username','password','address','email','mobile'];
            echo $arr[0];
            for ($i=0; $i < $count; $i++) { 
                echo "<div class='container' >";
                echo "<label for='".$arr[$i]."'>".$arr[$i]."</label>";
                echo "<input type='text' name='".$arr[$i]."' value='".$row[$i]."' disabled>";
                echo "</div>";
            }
            ?>
        <div class="crudbtn">
            <input type="button" value="update" onclick="edit()">
        </div>    
    </div>
</body>
</html>