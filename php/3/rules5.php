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

var_dump($h);//输出：bool(false)
echo "<br/>";
var_dump($i);//输出：bool(false)
echo "<br/>";
var_dump($j);//输出：bool(true)
echo "<br/>";
var_dump($k);//输出：bool(false) 
echo "<br/>";
var_dump($l);//输出：bool(false) 
echo "<br/>";
var_dump($m);//输出：bool(false) 
echo "<br/>";
var_dump($n);//输出：bool(false)
?>
