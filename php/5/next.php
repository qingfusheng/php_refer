<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";

$second = next($interests);
$third = next($interests);

var_dump(key($interests));//�����int(1) 
echo "<br/>";
var_dump(current($interests));//�����string(8) "computer" 
echo "<br/>";
var_dump($second);//�����string(5) "movie"  
echo "<br/>";
var_dump($third);//�����string(8) "computer" 
?>
