<?php
$a = "123.9abc";

$b = intval($a);
$c = floatval($a);
$d = strval($a);


var_dump($b);//�����int(123)
echo "<br/>";
var_dump($c);//�����float(123.9)
echo "<br/>";
var_dump($d);//�����string(8) "123.9abc" 
?>
