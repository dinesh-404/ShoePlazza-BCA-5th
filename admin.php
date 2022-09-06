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
            height: 500px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin: auto;
            background: red;
        }

        .add-products .adminTxtfield {
            background: red;
            position: relative;
            margin: 20px;
            background: gray;

        }

        .addRight {
            background: yellow;
            display: none;
            transition: all 3s;
        }

        .add-products .lbl {
            position: absolute;
        }
        .showimage{
            width: 300px;
            height: 300px;
        }

        .add-products .input {}
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

            <form action="resources/phpscripts/add_product.php" method="post" enctype="multipart/form-data">
                <div class="adminTxtfield">

                    <label for="name" class="lbl">Name</label>
                    <input type="text" name="name" id="name" class="input" required>
                </div>
                <div class="adminTxtfield">

                    <label for="information" class="lbl">info</label>
                    <input type="text" name="information" class="input" id="information" required>
                </div>
                <div class="adminTxtfield">

                    <label for="price" class="lbl">rate</label>
                    <input type="text" name="price" class="input" id="price" required>
                </div>
                <div class="adminTxtfield">

                    <label for="image" class="lbl">image</label>
                    <input type="file" name="image[]" onchange = "showImg();"id="image" class="input" accept=".jpg" multiple required>
                </div>

                <div class="rbtn">
                    <label for="addidas">addidas</label>
                    <input type="radio" name="brand" id="addidas" value="addidas" required>
                    <label for="nike">nike</label>
                    <input type="radio" name="brand" id="nike" value="nike" required>

                    <label for="jordans">jordans</label>
                    <input type="radio" name="brand" id="jordans" value="jordans" required>
                    <label for="puma">puma</label>

                    <input type="radio" name="brand" id="puma" value="puma" required>
                </div>
                <br>
                <input type="submit" value="submit">



            </form>
        </div>
        <div class="addRight">
<img src="" alt="nah" id="showimg" class="showimage">
<img src="" alt="nah" id="showimg" class="showimage">

<img src="" alt="nah" id="showimg" class="showimage">
<img src="" alt="nah" id="showimg" class="showimage">
<img src="" alt="nah" id="showimg" class="showimage">

        </div>
    </div>
    <script src="resources/js/admin.js"></script>
</body>

</html>