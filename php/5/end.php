<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";

$end = end($interests);

var_dump(key($interests));//Êä³ö£ºint(6)  
echo "<br/>";
var_dump(current($interests));//Êä³ö£ºstring(8) "software" 
echo "<br/>";
var_dump($end);//Êä³ö£ºstring(8) "software" 
?>
