<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";

$end = end($interests);
$first = reset($interests);

var_dump(key($interests));//�����int(2)   
echo "<br/>";
var_dump(current($interests));//�����string(5) "music" 
echo "<br/>";
var_dump($end);//�����string(8) "software" 
echo "<br/>";
var_dump($first);//�����string(5) "music" 
?>
