<?php
$x = 11.2;

$i = (int)$x;
$b = (bool)$x;
$f = (float)$x;
$a = (array)$x;
$s = (string)$x;
$o1 = (object)$x;
$o2 = (object)NULL;

var_dump($i);//�����int(11)
echo "<br/>";
var_dump($b);//�����bool(true)
echo "<br/>";
var_dump($f);//�����float(11.2)
echo "<br/>";
var_dump($a);//�����array (size=1){0 => float 11.2}
echo "<br/>";
var_dump($s);//�����string '11.2' (length=4)
echo "<br/>";
var_dump($o1);//�����object(stdClass)#1 (1) { ["scalar"]=> float(11.2) }  
echo "<br/>";
var_dump($o2);//�����object(stdClass)[2]
?>
