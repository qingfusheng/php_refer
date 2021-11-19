<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";
var_dump(key($interests));//Êä³ö£ºint(2) 
echo "<br/>";
var_dump(current($interests));//Êä³ö£ºstring(5) "music"
?>
