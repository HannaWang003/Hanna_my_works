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
            background-image: linear-gradient(-45deg, orange 50%, black 50%);
            width: 80vw;
            height: 100vh;
            margin: auto;
            border-radius: 50px 50px 0 0;
        }

        .box {
            margin: auto;
            width: 80%;
            height: 80%;
            background-color: rgba(255, 255, 255, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2%;
            border-radius: 50px;
            color:white;

        }
        .top{
            width:5vw;
            height:50px;
            position:fixed;
            right:30px;
            bottom:30px;
            background-color:orangered;
            display:flex;
            padding:10px;
            border-radius:5vw 5vw 5vw 5vw;
            
        }
        .top >a{
            margin:auto;
            font-size:100%;
            color:white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-decoration:none;

        }
        .nav{
            background-image:linear-gradient(45deg,black 50%,orange 50%);
            max-width:80vw;
            margin:auto;
            display:flex;
            justify-content:space-around;
            font-size:1vw;
            white-space:nowrap;
            padding:20px;
            overflow:hidden;
            text-overflow: ellipsis;

        }
        nav > a{
            text-decoration:none;
            color:black;
            font-family:'微軟正圓體';
            font-weight:bolder;
            background-color:rgba(255,255,255,0.3);
            padding:15px;
            border-radius: 30px;


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
    $name1="直角三角形";
    $name2="倒直角三角形";
    $name3="正三角形";
    $name4="倒正三角形";
    $name5="菱形";
    $name6="矩形";
    $name7="矩形加對角線";
    $name8="矩形對角線加顏色";
    ?>
    <div class="nav">
        <nav>
                   <a href="#T1"><?php echo $name1;?></a>
                    <a href="#T2"><?php echo $name2;?></a>
                    <a href="#T3"><?php echo $name3;?></a>
                    <a href="#T4"><?php echo $name4;?></a>
                    <a href="#S1"><?php echo $name5;?></a>
                    <a href="#S2"><?php echo $name6;?></a>
                    <a href="#S3"><?php echo $name7;?></a>
                    <a href="#S4"><?php echo $name8;?></a>
                </nav>
    </div>
    <div id="T1" class="container">
        <h2><?php echo $name1;?></h2>
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
    <div id="T2" class="container">
        <h2><?php echo $name2;?></h2>
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
    <div id="T3" class="container">
        <h2><?php echo $name3;?></h2>
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
    <div id="T4" class="container">
        <h2><?php echo $name4;?></h2>
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
    <div id="S1" class="container">
        <h2><?php echo $name5;?></h2>
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
    <div id="S2" class="container">
        <h2><?php echo $name6;?></h2>
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
    <div id="S3" class="container">
        <h2><?php echo $name7;?></h2>
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
    <div id="S4" class="container">
        <h2><?php echo $name8;?></h2>
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
    <div class="top">
        <a href="#">TOP</a>
    </div>
</body>

</html>