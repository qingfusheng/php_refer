<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";
var_dump(key($interests));//�����int(2) 
echo "<br/>";
var_dump(current($interests));//�����string(5) "music"
?>
