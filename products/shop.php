<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css" />
    <title></title>
</head>

<body>
    <div class="grid">
        <div class="card">
            <div class="img">
                <img src="\products\jordan4air\jordan4-1.jpg" alt="" srcset="">
                <h1>Jordan air 4</h1><br>
                <div class="other"><br>
                    <p>Jordan Air 4 shoes for men/women</p>
                </div>
                <div>
                   <button>show more</button>
                </div>

            </div>

        </div>
        <div class="card">
            <div class="img">
                <img src="\products\jordan4air\jordan4-1.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="\products\jordan4air\jordan4-1.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="\products\jordan4air\jordan4-1.jpg" alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="grid">
        <div class="card">
            <div class="img">
                <img src="\products\jordan4air\jordan4-1.jpg" alt="" srcset="">
                <div class="other"><br>
                    <h1>Jordan air 4</h1>
                    <p>Jordan Air 4 shoes for men/women</p>
                </div>
                <div style="display: block;">
                    <button>show more</button>
                </div>

            </div>

        </div>
        <div class="card">
            <div class="img">
                <img src="\products\jordan4air\jordan4-1.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="\products\jordan4air\jordan4-1.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="card">

            <div class="img">
                <img src="\products\jordan4air\jordan4-1.jpg" alt="" srcset="">
            </div>
        </div>
    </div>
    <div class='bottom'></div>
    <script>
        var card = document.getElementsByClassName('card');
        var i = 0
        for (let i = 0; i < card.length; i++) {
            card[i].addEventListener('mouseover', () => {

                card[i].classList.add('cardhover');
            });
            card[i].addEventListener('mouseleave', () => {

                card[i].classList.remove('cardhover');
            });
        }
    </script>
</body>

</html>