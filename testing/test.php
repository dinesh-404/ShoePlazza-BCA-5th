<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            background: none;
            border: none;
        }
    </style>

</head>

<body>
    <button type="button" onclick="change()">
        <img src="eyes.png" alt="" srcset="" height="30px" id="oki">
    </button>
    <script>
        let btn = document.getElementById('oki');
        var i = 0;

        function change() {
            if (i == 0) {
                btn.src = "eyeopen.png";
                i++;
            } else {
                btn.src = "eyes.png";
                i = 0;
            }

        }
    </script>
</body>

</html>