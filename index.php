<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="cursor.css">
    <link rel="stylesheet" href="testdesign.css">
    <style>
        .content {
            height: 1000px;
            overflow: scroll;
        }
    </style>
</head>

<body class="body" id="body">
    

    <?php include('navbar.php'); ?>
    <div class="content"></div>
    <?php include('footer.php'); ?>
    <div class="cursor"></div>
    <div class="innercursor"></div>
    <script src="cursor.js"></script>
</body>

</html>