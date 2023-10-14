<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramid</title>
    <style>
        body {}

        h2 {
            text-align: center;
            background-color: yellow;
            line-height: 10vh;
            border-radius: 50px 50px 0 0;
        }

        .container {
            background-image: linear-gradient(45deg, yellow 0%, white 50%, yellow 90%);
            width: 80vw;
            height: 100vh;
            margin: auto;
            border-radius: 50px 50px 0 0;
        }

        .box {
            margin: auto;
            width: 80%;
            height: 80%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            border-radius: 50px;

        }
    </style>
</head>

<body>
    <?php
    // 層數
    $n = 9;
    $type = "🍋";
    ?>
    <div class="container">
        <h2>直角三角形</h2>
        <div class="box">
            <?php
            // 控制層數
            for ($j = 1; $j <= 9; $j++) {
                for ($i = 1; $i <= $j; $i++) {
                    echo $type;
                }
                echo "<br>";
            }
            // 控制每層列印的個數
            ?>
        </div>
    </div>
    <div class="container">
        <h2>倒直角三角形</h2>
        <div class="box">
            <?php
            for ($j = $n; $j >= 1; $j--) {
                for ($i = 1; $i <= $j; $i++) {
                    echo $type;
                }
                echo "<br>";
            }

            ?>
        </div>
    </div>
</body>

</html>