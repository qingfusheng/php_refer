<?php
$a = "";
$b = "0";
$c = "0.0";
$d = 0;
$e = 0.0;
$f = NULL;
$g = array();

$h = TRUE && $a;
$i = TRUE && $b;
$j = TRUE && $c;
$k = TRUE && $d;
$l = TRUE && $e;
$m = TRUE && $f;
$n = TRUE && $g;

var_dump($h);//�����bool(false)
echo "<br/>";
var_dump($i);//�����bool(false)
echo "<br/>";
var_dump($j);//�����bool(true)
echo "<br/>";
var_dump($k);//�����bool(false) 
echo "<br/>";
var_dump($l);//�����bool(false) 
echo "<br/>";
var_dump($m);//�����bool(false) 
echo "<br/>";
var_dump($n);//�����bool(false)
?>
