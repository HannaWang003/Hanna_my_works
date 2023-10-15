<style>
table, tr, td{
    border:1px solid black;
    border-collapse: collapse;
    text-align:center;
}
table {
    margin: auto;
    width: 80vw;
    height:50%;
    background-color: rgb(164, 91, 110);
    border: 10px solid white;
    border-radius: 10px;
    table-layout:fixed;
}
td {
    text-align: center;
    border: 2px dotted rgb(58, 46, 88);
    font-size: 20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
nav {
    line-height: 5vh;
    display: flex;
    justify-content: space-around;
}

nav>a {
    font-family: "微軟正圓體";
    color: aliceblue;
    text-decoration: underline overline;
}

h2{
    text-align: center;
    background-color: rgba(25, 21, 48, 0.5);
    color: lemonchiffon;
    border-radius: 20px;
    padding: 10px;
}
.container {
    margin: auto;
    background-color: rgb(252, 186, 166);
    width: 80vw;
    height:100vh;
    padding: 5vw;
}

.nav {
    margin: auto;
    height: 5vh;
    width: 80vw;
    padding: 5vw;
    background-color: rgb(122, 77, 113);
}
.t1 tr:nth-child(1){
    background-color:bisque;
    color:gray;
}
.t1 tr>td:nth-child(1){
    background-color:antiquewhite;
    color:gray;
}
.top {
    display: flex;
    position: fixed;
    bottom: 20px;
    right: 20px;
}

.top>a {
    font-size: 50px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-decoration: none;
    padding: 2px;
    color: aliceblue;
    background-color: rgb(236, 65, 131);
    border-radius: 50px 5px 0 5px;
}

</style>
<?php
$title1="九九乘法表";
$title2="九九乘法表有標頭交叉計算式";
$title3="九九乘法表階梯式";
$n=9;
?>
<div class="nav">
    <nav>
        <a href="#m1"><?php echo $title1?></a>
        <a href="#m2"><?php echo $title2?></a>
        <a href="#m3"><?php echo $title3?></a>
    </nav>
</div>
<div id="m1" class="container">
    <h2><?php echo $title1?></h2>
    <table>
<?php
for($j=1;$j<=$n;$j++){
    echo "<tr>";
for($i=1;$i<=$n;$i++){
    // echo $i;
    echo "<td>";
    echo $i." x ".$j." = ".$i*$j;
    echo  "</td>";
}
echo "</tr>";
}
?>
</table>
</div>
<div id="m2" class="container">
    <h2><?php echo $title2?></h2>
    <table class="t1">
        <?php
        for($j=0;$j<=$n;$j++){
            echo "<tr>";
            for($i=0;$i<=$n;$i++){
                echo "<td>";
if($i==0 && $j==0){
    echo "&nbsp;";
}
elseif($i==0){
    echo "$j";
}
elseif($j==0){
    echo "$i";
}
else{
    echo $i*$j;
}
            }
        }
        echo "</td>";
        ?>
    </table>
</div>
<div id="m3" class="container">
    <h2><?php echo $title3?></h2>
    <table class="t1">
        <?php
for($j=0;$j<=$n;$j++){
    echo "<tr>";
    for($i=0;$i<=$n;$i++){
        echo "<td>";
        if($i==0 && $j==0){
            echo "&nbsp;";
        }
        elseif($i==0){
            echo $j;
        }
        elseif($j==0){
            echo $i;
        }
        elseif($i>$j){
            echo "&nbsp;";
        }
        else{
        echo $i*$j;
    }
    echo "</td>";
    }
    echo "</tr>";
}


?>
    </table>
</div>
<div class="top"><a href="#">TOP</a></div>