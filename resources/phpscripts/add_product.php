<?php
include('connect.php');
if (isset($_REQUEST['name'])) {

    $pname = $_REQUEST['name'];
    $pinfo = $_REQUEST['information'];
    $price = $_REQUEST['price'];
    $pbrand = $_REQUEST['brand'];

    $totfiles = count($_FILES['image']['name']) - 1;
    $tempname = $_FILES['image']['tmp_name'];

    $dir = $pname;


    var_dump($_FILES);
    if (!is_dir('../productimg/' . $dir)) {

        mkdir('../productimg/' . $dir);
    }
    $v = 1;
    for ($i =  $totfiles; $i >= 0; $i--) {
        $path =  '../productimg/' . $dir . '/' . $dir . '-' . $v . '.jpg';
        $v = $v + 1;
        $a = copy($tempname[$i], $path);
    }
    $pimg = $dir . '/' . $dir;
    echo $pimg;
    $selcmd = "SELECT * FROM items WHERE name='" . $pname . "'";
    echo $selcmd;
    $selq = mysqli_query($connect, $selcmd);
    var_dump($selq);
    if (mysqli_num_rows($selq) > 0) {
        header('location:../../admin.php');
    } else {

        $cmd = "INSERT INTO `items`(`name`, `brand`, `image`, `information`, `price`) VALUES ('" . $pname . "','" . $pbrand . "','" . $pimg . "','" . $pinfo . "'," . $price . ")";
        echo $cmd;
        $q  = mysqli_query($connect, $cmd);
        header('location:../../admin.php?err="product inserted successfully"');
    }
}
else{
    header('location:../../admin.php');

}
