<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css"/>
    <title>admin</title>
</head>
<body class = 'body'>
<div class="cursor"></div>
    <div class="innercursor"></div>
    <?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'project';
	$connect = mysqli_connect($host, $user, $pass, $database) or die("PHP & MySQL Connection Error");
    $query = mysqli_query($connect,"SELECT * FROM `login`;");
    
    ?>

    <table class='admintable'>
        <tr>
            <th>id</th>
            <th>fullname</th>
            <th>age</th>
            <th>gender</th>
            <th>username</th>
            <th>password</th>
            <th>address</th>
            <th>email</th>
            <th>mobile</th>
        </tr>
        <?php
        while($row = mysqli_fetch_row($query)) { 
        ?><tr><?php
            for ($i=0; $i <=8 ; $i++) { ?>
                <td><?php echo ($row[$i]);?></td>
                <?php
            }
        ?></td><?php
        }?>
        </tr>
    </table>
    <script src="\test.js"></script>
</body>
</html>