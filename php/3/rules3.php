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
var_dump($e);//�����int(7) 
echo "<br/>";
var_dump($f);//�����float(-3.01) 
echo "<br/>";
var_dump($g);//�����float(4200001)
echo "<br/>";
var_dump($h);//�����float(-3.1)
echo "<br/>";
var_dump($i);//�����int(1) 
?>
