<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramid</title>
    <style>
        * {
font-family:'Courier New', Courier, monospace;
        }

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
            font-size: 2%;
            border-radius: 50px;
            color:white;

        }
    </style>
</head>

<body>
    <?php
    // 層數
    $n = 31;
    // 正三角形時，圖形空白格*2/文字*1
    // line88
    $type = "*";
    //顏色
    $color = "yellow";
    ?>
    <div class="container">
        <h2>直角三角形</h2>
        <div class="box">
            <?php
            // 控制層數
            for ($j = 1; $j <= $n; $j++) {
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
    <div class="container">
        <h2>正三角形</h2>
        <div class="box">
            <?php
            for($j=1;$j<=$n;$j++){
            for($k=1;$k<=$n-$j;$k++){
                // 用圖形時，2個空白格
                // 文字，只用一個就可以了
               echo "&nbsp;"; 
            }
            if($j==1){
                $l=$j;
            }
            else{
                $l=2*$j-1;
            }
for($i=1;$i<=$l;$i++){
    echo $type;
}
echo "<br>";
}
?>
        </div>
    </div>
    <div class="container">
        <h2>倒正三角形</h2>
        <div class="box">
            <?php
            for($j=$n;$j>=1;$j--){
            for($k=1;$k<=$n-$j;$k++){
echo "&nbsp;";
            }
            if($j==1){
                $l=$j;
            }
            else{
                $l=2*$j-1;
            }
            for($i=1;$i<=$l;$i++){
echo $type;
            }
            echo "<br>";
        }
            ?>
        </div>
    </div>
    <div class="container">
        <h2>菱形</h2>
        <div class="box">
            <?php
// 控制階層
for($j=1;$j<=$n;$j++){
    // 判斷什麼時候要反轉
    $mid=ceil($n/2);
    if($j<=$mid){
$tmp=$j;
    }
    else{
        $tmp--;
    }
// 印空格
for($k=1;$k<=$mid-$tmp;$k++){
    echo "&nbsp;";
}
// 印圖案
for($i=1;$i<=2*$tmp-1;$i++){
    echo $type;
}

echo "<br>";
}
            ?>
        </div>
    </div>
    <div class="container">
        <h2>矩形</h2>
        <div class="box">
        <?php
for($j=1;$j<=$n;$j++){
    echo "*";
for($i=1;$i<=$n-2;$i++){
    if($j==1 || $j==$n){
    echo $type;}
    else{
        echo "&nbsp;";
    }
}
echo "*";
echo "<br>";
}
        ?>
        </div>
    </div>
    <div class="container">
        <h2>矩形加對角線</h2>
        <div class="box">
            <?php
            for($j=1;$j<=$n;$j++)
            {
                echo $type;
for($i=1;$i<=$n-2;$i++){
    if($j==1 || $j==$n){
    echo $type;
}
elseif($i==$j-1 || $i==$n-$j){
    echo $type;
}
else{
    echo "&nbsp;";
}
}
echo $type;
echo "<br>";
}
            ?>
        </div>
    </div>
    <div class="container">
        <h2>矩形加對角線(+顏色)</h2>
        <div class="box">
            <div class="inbox">
        <?php
for($j=1;$j<=$n;$j++){
    echo $type;
    for($i=1;$i<=$n-2;$i++){
        if($j==1 || $j==$n){
        echo $type;
    }
    elseif($i==$j-1 || $i==$n-$j){
        echo "<span style='color:$color'>$type</span>";
    }
    else{
        echo "&nbsp;";
    }
    }
    echo $type;
    echo "<br>";
}

        ?>
        </div>
        </div>
    </div>
</body>

</html>