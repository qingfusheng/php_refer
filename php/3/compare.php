<?php
$a = 5;
$b = "5.0";
$c = 3;
var_dump($a==$b);//输出：bool(true)
echo "<br/>";
var_dump($a===$b);//输出：bool(false)
echo "<br/>";
var_dump($a!=$b);//输出：bool(false)
echo "<br/>";
var_dump($a!==$b);//输出：bool(true)
echo "<br/>";
var_dump($a<=$b);//输出：bool(true)
echo "<br/>";
var_dump($a>=$b);//输出：bool(true)
echo "<br/>";
?>
