<?php
$a = "123.9abc";
settype($a,"bool");
var_dump($a);//输出：bool(true)
echo "<br/>";

$b = "123.9abc";
settype($b,"int");
var_dump($b);//输出：int(123)
echo "<br/>";

$c = "123.9abc";
settype($c,"float");
var_dump($c);//输出：float(123.9)
echo "<br/>";

$d = "123.9abc";
settype($d,"string");
var_dump($d);//输出：string(8) "123.9abc"
echo "<br/>";

$e = "123.9abc";
settype($e,"array");
var_dump($e);//输出：array(1) { [0]=> string(8) "123.9abc" }
echo "<br/>";

$f = "123.9abc";
settype($f,"object");
var_dump($f);//输出：object(stdClass)#1 (1) { ["scalar"]=> string(8) "123.9abc" }
echo "<br/>";

$g = "123.9abc";
settype($g,"NULL");
var_dump($g);//输出：NULL
?>
