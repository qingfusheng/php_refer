<?php
$a = "123.9abc";

$b = intval($a);
$c = floatval($a);
$d = strval($a);


var_dump($b);//Êä³ö£ºint(123)
echo "<br/>";
var_dump($c);//Êä³ö£ºfloat(123.9)
echo "<br/>";
var_dump($d);//Êä³ö£ºstring(8) "123.9abc" 
?>
