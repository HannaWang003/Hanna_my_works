<style>
    /* element */
td{
    border:1px solid black;
}
</style>
<div class="container">
    <table>
        <!-- 同一列 -->
<?php
for ($j = 2; $j < 10; $j++) {
    echo "<td>";
    for ($i = 1; $i < 10; $i++) {
        //    echo $i."&nbspx&nbsp".$j."=".$i*$j;
        echo "$j&nbspx&nbsp$i=" . $i * $j . "<br>";
    }
    echo "</td>";
}
?>
</div>
</table>
<!-- 分成2列 -->
<div class="container">
    <table>
        <tr>
<?php
for ($j = 2; $j < 10; $j++) {
    if($j==6){
        echo "</tr></table><table><tr>";
    }
    echo "<td>";
    for ($i = 1; $i < 10; $i++) {
        //    echo $i."&nbspx&nbsp".$j."=".$i*$j;
        echo "$j&nbspx&nbsp$i=" . $i * $j . "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>
</div>