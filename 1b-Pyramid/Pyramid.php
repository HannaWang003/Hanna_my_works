<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramid</title>
    <style>
        /* element */
        /* class-div */
        .container {
            background-color: bisque;
            width: 100vw;
            height: 100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .box {
background-color:blueviolet;
width:80%;
height:80%;
text-align:center;
display:flex;
justify-content:center;
align-items:center;
line-height:2rem;
font-size:2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <?php
            $n = 9;
            for ($j = 1; $j <= $n; $j++) {
                for ($i = 1; $i <= $j; $i++) {
                    echo "🐸";
                }
                echo "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>