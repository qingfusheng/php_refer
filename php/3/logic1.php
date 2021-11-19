<?php
$a = 3>2;
$b = 3>4;
var_dump($a&&$b);//输出：bool(false)
echo "<br/>";
var_dump($a||$b);//输出：bool(true)
echo "<br/>";
var_dump(!$a);//输出：bool(false)
echo "<br/>";
var_dump($a xor $b);//输出：bool(true) 
echo "<br/>";
?>
