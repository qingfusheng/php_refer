<?php
$a = 1;
$b = 1.02;
$c = TRUE;
$d = FALSE;
$e = NULL;
$f = "degree";

$g = $a.$f;
$h = $b.$f;
$i = $c.$f;
$j = $d.$f;
$k = $e.$f;

var_dump($g);//输出：string(7) "1degree"
echo "<br/>";
var_dump($h);//输出：string(10) "1.02degree" 
echo "<br/>";
var_dump($i);//输出：string(7) "1degree"
echo "<br/>";
var_dump($j);//输出：string(6) "degree" 
echo "<br/>";
var_dump($k);//输出：string(6) "degree"
?>
