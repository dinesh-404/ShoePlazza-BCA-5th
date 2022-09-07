<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        .admin-wrapper {
            width: 100%;
            height: 800px;
            margin: 0;
            padding: 0;
            background: green;
        }

        .add-products {
            display: grid;
            grid-template-columns: 400px 1fr;
            margin: auto;
        }

        .add-products .adminTxtfield {
            position: relative;
            margin:20px;
            background:gray;
            padding:10px;

        }
        
        .addRight {
            background: yellow;
            display: none;
            transition: all 3s;
        }
        

        .add-products .lbl {
            position: absolute;
            left: 10px;
            top:0;
            transition: all .5s;
        }
        .showimage{
            width: 300px;
            height: 300px;
        }
        .input:focus ~ .lbl{
            top:-20px;
        }
        .input:valid ~ .lbl{
            top:-20px;
        }
        .input{
            width: 100%;
            position: relative;
            background:none;
            outline: none;
            border:none;
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

                    <input type="text" name="name" id="name" class="input" required >
                    <label for="name" class="lbl">Name</label>
                </div>
                <div class="adminTxtfield">

                    <input type="text" name="information" class="input" id="information" required >
                    <label for="information" class="lbl">info</label>
                </div>
                <div class="adminTxtfield">

                    <input type="text" name="price" class="input" id="price" required>
                    <label for="price" class="lbl">rate</label>
                </div>
                <div class="adminTxtfield">

                    <input type="file" name="image[]" onchange = "showImg();"id="image" required class="input" accept=".jpg" multiple >
                    <label for="image">image</label>
                </div>

                <div class="rbtn">
                    <label for="adidas">adidas</label>
                    <input type="radio" name="brand" id="adidas" value="adidas" >
                    <label for="nike">nike</label>
                    <input type="radio" name="brand" id="nike" value="nike" >

                    <label for="jordans">jordans</label>
                    <input type="radio" name="brand" id="jordans" value="jordans" >
                    <label for="puma">puma</label>

                    <input type="radio" name="brand" id="puma" value="puma" >
                </div>
                <br>
                <button id="sbtn" type="button" onclick="validate()">Submit</button>



            </form>
        </div>
        <div class="addRight">
<img src="" alt="" id="showimg" class="showimage">
<img src="" alt="" id="showimg" class="showimage">

<img src="" alt="" id="showimg" class="showimage">
<img src="" alt="" id="showimg" class="showimage">

<img src="" alt="" id="showimg" class="showimage">
<img src="" alt="" id="showimg" class="showimage">
        </div>
    </div>
    <script src="resources/js/admin.js"></script>
</body>

</html>