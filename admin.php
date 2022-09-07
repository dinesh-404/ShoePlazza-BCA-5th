<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        @font-face {
            font-family: "regular";
            src: url("resources/fonts/titilliumweb-regular-webfont.woff2") format("woff2"),
                url("resources/fonts/titilliumweb-regular-webfont.woff") format("woff"),
                url("resources/fonts/TitilliumWeb-Regular.ttf") format("truetype");
        }
        body,html{
            margin: 0;
            padding: 0;
        }
*{
    font-family: "regular";
}
        .admin-wrapper {
           
            width: 100%;
            height: 750px;
            margin: 0;
            padding: 0;
            background: url('resources/images/adminbg.jpg');
            background-position: center;
            background-size: cover;
            padding: 30px;
        }

        .add-products {
            display: grid;
            grid-template-columns: 400px 1fr;
            margin: auto;
        }

        .add-products .adminTxtfield {
            position: relative;
            margin: 20px;
            padding: 10px;
            border-radius: 10px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;

        }

        .addRight {
            /* display: none; */
            padding: 20px;
        }


        .add-products .lbl {
            position: absolute;
            left: 10px;
            top: 10px;
            transition: all .5s;
        }

        .showimage {
            width: 300px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            margin: 2px;
        }

        .input:focus~.lbl {
            top: -20px;
        }

        .input:valid~.lbl {
            top: -20px;
        }

        .input {
            width: 100%;
            position: relative;

            background: none;
            outline: none;
            border: none;
        }

        .rbtn {
            transform: translate(50px,-22px);
        }
    </style>
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

                    <label for="image">image</label>
                    <input type="file" name="image[]" onchange="showImg();" id="image" required class="input" accept=".jpg" multiple>
                </div>

                <div class="adminTxtfield">
                    brand:
                    <div class="rbtn">
                        <button type="button" onclick="document.getElementById('adidas').click();">adidas</button>
                        <button type="button" onclick="document.getElementById('puma').click();">Puma</button>
                        <button type="button" onclick="document.getElementById('nike').click();gi">Nike</button>

                       
                        <input type="radio" name="brand" id="adidas" class="brandbtn" value="adidas"><br>
                      
                        <input type="radio" name="brand" id="nike" value="nike" class="brandbtn"><br>


                        <input type="radio" name="brand" id="puma" value="puma" class="brandbtn"><br>
                    </div>
                </div>
                <br>
                <button id="sbtn" type="button" onclick="validate()">Submit</button>



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
    <script src="resources/js/admin.js"></script>
</body>

</html>