<?php
session_start();
include('resources/phpscripts/connect.php');
if (!isset($_SESSION['admin'])) header('location:signin.php');
else{
    $cmd = "select username from login where id = ".$_SESSION['uid']." and role = 'admin'";
    $q = mysqli_query($connect,$cmd);
    $arr = mysqli_fetch_array($q);
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
    <title>Admin Page</title>
</head>
<body>
    <?php
    include('resources/imports/navbar.php');
    include("resources/imports/cursor.php");
    ?>
        <div class="admin-wrapper">
            <h1>
                Hello ! <?php echo $arr['username']; ?> <br>
            </h1>
            <h4>this is your admin page</h4>
            <button class="wrapper-btn" id="add-product-btn" onclick="add_product()">Add products</button><br><br>
            <button class="wrapper-btn" onclick="view_sales()">Sales</button>
        </div>
        <div class="add-products" id="add-product">
            <div class="addLeft">
                <form action="resources/phpscripts/add_product.php" method="post" enctype="multipart/form-data" id="products">
                    <div class="adminTxtfield">
                        <input type="text" name="name" id="name" class="input" required>
                        <label for="name" class="lbl">Name</label>
                    </div>
                    <div class="adminTxtfield">
                        <input type="text" name="information" class="input" id="information" required>
                        <label for="information" class="lbl">info</label>
                    </div>
                    <div class="adminTxtfield">
                        <input type="text" name="price" class="input" id="price" required>
                        <label for="price" class="lbl">rate</label>
                    </div>
                    <div class="adminTxtfield">
                        <button type="button" id="browse">Click here to Import images</button>
                        <input type="file" name="image[]" onchange="showImg();" id="image" required class="input" accept=".jpg" multiple>
                    </div>
                    <div class="adminTxtfield">
                        brand:
                        <div class="rbtn">
                            <button class="radiowrap" type="button" onclick="document.getElementById('adidas').click();">adidas</button><br>
                            <button type="button" class="radiowrap" onclick="document.getElementById('puma').click();">Puma</button><br>
                            <button type="button" class="radiowrap" onclick="document.getElementById('nike').click();">Nike</button>

                            <input type="radio" name="brand" id="adidas" class="brandbtn" hidden value="adidas">
                            <input type="radio" name="brand" id="nike" value="nike" hidden class="brandbtn">
                            <input type="radio" name="brand" id="puma" value="puma" hidden class="brandbtn">
                        </div>
                    </div>
                    <br>
                    <button id="sbtn" class="adminSubmit" type="button" onclick="validate()">Submit</button>
                </form>
            </div>
            <div class="addRight">
                <img src="resources/productimg/nmd_v3/nmd_v3-1.jpg" alt="" id="showimg" class="showimage">
                <img src="resources/productimg/nmd_v3/nmd_v3-1.jpg" alt="" id="showimg" class="showimage">
                <img src="resources/productimg/nmd_v3/nmd_v3-1.jpg" alt="" id="showimg" class="showimage">
                <img src="resources/productimg/nmd_v3/nmd_v3-1.jpg" alt="" id="showimg" class="showimage">
                <img src="resources/productimg/nmd_v3/nmd_v3-1.jpg" alt="" id="showimg" class="showimage">
                <img src="resources/productimg/nmd_v3/nmd_v3-1.jpg" alt="" id="showimg" class="showimage">
            </div>
        </div>
        <div class="ShowProducts" id="view-sales">
            <?php
            $cmd = "SELECT uc.user_id, uc.status , it.name, it.price ,l.username FROM `user_cart` uc INNER JOIN items it ON uc.item_id = it.id INNER JOIN `login` l ON uc.user_id = l.id ";
            $q = mysqli_query($connect, $cmd);
            $r = mysqli_fetch_all($q, MYSQLI_ASSOC);
            ?>
            <table class="admintable">
                <tr class="adminrow">
                    <th class="productHead column" colspan="6">
                        Products Bought by Users
                    </th>
                </tr>
                <tr class="adminrow headrow">
                    <td class="column">No.</td>
                    <td class="column">User id</td>
                    <td class="column">Username</td>
                    <td class="column">Product Name</td>
                    <td class="column">Price</td>
                    <td class="column">Status</td>
                </tr>
                <?php
                $n = 1;
                for ($i = 0; $i < count($r); $i++) {
                ?>
                    <tr class="adminrow">
                        <td class="column"><?php echo $n;
                                            $n++; ?></td>
                        <td class="column"><?php echo $r[$i]['user_id']; ?></td>
                        <td class="column"><?php echo $r[$i]['username']; ?></td>
                        <td class="column"><?php echo $r[$i]['name']; ?></td>
                        <td class="column"><?php echo $r[$i]['price']; ?></td>
                        <td class="column"><?php echo $r[$i]['status']; ?></td>
                    <?php
                }
                    ?>
            </table>
        </div>
    </div>
    <script src="resources/js/admin.js"></script>
</body>

</html>