<?php
$f = file_get_contents("test.json");
$headobj = "heading";
$paraobj = "info";

$jsonarray = json_decode($f);
$val = 1;
print_r($jsonarray);

$mydir = 'products\productimg\airjordan7';


$files = array_slice(scandir($mydir), 2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products\shop.css">
    <title>yeah testing auto image</title>
</head>

<body>
    <?php
    for ($i = 0; $i < count($files); $i++) {
        // echo "<img src='products\productimg\airjordan7\/",$files[$i],"'>";
        // echo'<br>';
    
    ?>
    
    <div class="cardrow">
        <?php
            for ($j=0; $j < 4; $j++) { 
                # code...
            
        ?>
        <div class="card">
            <div class="cardimage">
                <div class="imgtxt">
                    <h1><?php echo $jsonarray->$headobj->$i; ?></h1>
                    <p><?php echo $jsonarray->$paraobj->$i; ?></p>
                </div>
                <?php echo "<img src='products/productimg/airjordan7/".$files[$i]."'>";
                $i++;?>
                
            </div>
            <a class="linkbtn" href="/products/productpages/jordanair4.php">see more</a>
        </div><?php
            }
            ?>
    </div>
    <?php
}
?>
</body>

</html>