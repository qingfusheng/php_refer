<?php
$x = 11.2;

$i = (int)$x;
$b = (bool)$x;
$f = (float)$x;
$a = (array)$x;
$s = (string)$x;
$o1 = (object)$x;
$o2 = (object)NULL;

var_dump($i);//输出：int(11)
echo "<br/>";
var_dump($b);//输出：bool(true)
echo "<br/>";
var_dump($f);//输出：float(11.2)
echo "<br/>";
var_dump($a);//输出：array (size=1){0 => float 11.2}
echo "<br/>";
var_dump($s);//输出：string '11.2' (length=4)
echo "<br/>";
var_dump($o1);//输出：object(stdClass)#1 (1) { ["scalar"]=> float(11.2) }  
echo "<br/>";
var_dump($o2);//输出：object(stdClass)[2]
?>
