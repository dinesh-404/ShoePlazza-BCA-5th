<?php
include('resources/phpscripts/connect.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/design.css">
    <title>Admin Page</title>

</head>

<body>
    <div class="admin-wrapper">
        <h1>
            Hello ! user
        </h1>
        <button>click here to add products</button><br><br>
        <button>click here to view products</button><br><br>
        <button>click here to edit products</button><br><br>
        <button>click here to view items sold</button>
    </div>
    <div class="add-products">
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


                        <input type="radio" name="brand" id="adidas" class="brandbtn" value="adidas">

                        <input type="radio" name="brand" id="nike" value="nike" class="brandbtn">


                        <input type="radio" name="brand" id="puma" value="puma" class="brandbtn">
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
    <div class="ShowProducts">
        <?php
        $cmd = "SELECT uc.user_id, uc.status , it.name, it.price ,l.username FROM `user_cart` uc INNER JOIN items it ON uc.item_id = it.id INNER JOIN `login` l ON uc.user_id = l.id ";
        $q = mysqli_query($connect, $cmd);
        $r = mysqli_fetch_all($q, MYSQLI_ASSOC);
        var_dump($r);
        ?>
        <table class="admintable">
            <tr class="adminrow">
                <td class="column">No.</td>
                <td class="column">User id</td>
                <td class="column">Username</td>
                <td class="column">Product Name</td>
                <td class="column">Price</td>
                <td class="column">Status</td>
            </tr>
            <?php
            $n=1;
             for ($i=0; $i < count($r); $i++) { 
                # code...
              
            ?>
                <tr class="adminrow">
                    <td class="column"><?php echo $n; $n++; ?></td>
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
    <script src="resources/js/admin.js"></script>
</body>

</html>