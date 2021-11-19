<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";

$second = next($interests);
$third = next($interests);

var_dump(key($interests));//输出：int(1) 
echo "<br/>";
var_dump(current($interests));//输出：string(8) "computer" 
echo "<br/>";
var_dump($second);//输出：string(5) "movie"  
echo "<br/>";
var_dump($third);//输出：string(8) "computer" 
?>
