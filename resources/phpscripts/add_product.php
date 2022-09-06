<?php
include('connect.php');
var_dump($_REQUEST);
$pname = $_REQUEST['name'];
$pinfo = $_REQUEST['information'];
$price = $_REQUEST['price'];
$pbrand = $_REQUEST['brand'];

$totfiles = count($_FILES['image']['name']);
$tempname = $_FILES['image']['tmp_name'];

$dir = $pname;

if ($totfiles > 1) {
    $val = 1;
} else {
    $val = 0;
}
for ($i = $val; $i < $totfiles; $i++) {
    $path =  '../productimg/' . $dir . '/' . $dir . '-' . $i . '.jpg';
    copy($tempname[$i], $path);
}
$pimg = $dir.'/'.$dir;
echo $pimg;
$selcmd = "SELECT * FROM items WHERE name='".$pname."'";
echo $selcmd;
$selq = mysqli_query($connect,$selcmd);
var_dump($selq);
if(mysqli_num_rows($selq)>0){
    $_SESSION['perror']='product already exists';
    header('location:../../admin.php');
}
else{

    $cmd = "INSERT INTO `items`(`name`, `brand`, `image`, `information`, `price`) VALUES ('" . $pname . "','" . $pbrand . "','" . $pimg . "','" . $pinfo . "','" . $price . "')";
    $q  = mysqli_query($connect,$cmd); 
    
}
    ?>
