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

var_dump($g);//�����string(7) "1degree"
echo "<br/>";
var_dump($h);//�����string(10) "1.02degree" 
echo "<br/>";
var_dump($i);//�����string(7) "1degree"
echo "<br/>";
var_dump($j);//�����string(6) "degree" 
echo "<br/>";
var_dump($k);//�����string(6) "degree"
?>
