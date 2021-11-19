<?php
$a = 1;
$b = "-4.01";
$c = "4.2e6";
$d = "-4.1degree";

$e = $a + "6th";
$f = $a + $b;
$g = $a + $c;
$h = $a + $d;
$i = $a + "degree";
var_dump($e);//输出：int(7) 
echo "<br/>";
var_dump($f);//输出：float(-3.01) 
echo "<br/>";
var_dump($g);//输出：float(4200001)
echo "<br/>";
var_dump($h);//输出：float(-3.1)
echo "<br/>";
var_dump($i);//输出：int(1) 
?>
