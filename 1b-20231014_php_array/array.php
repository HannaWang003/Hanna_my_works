<?php
$a[]=10;
$a[]=30;
$a[]="泰山";
echo "<pre>";
print_r($a);
echo "</pre>";
echo $a[0];
$a["姓名"]=["中島美嘉","桑田佳祐","大塚愛"];
echo "<pre>";
print_r($a);
echo "</pre>";
echo $a["姓名"][0];
echo "<br>";
echo "<pre>";
print_r($a["姓名"]);
echo "</pre>";
?>