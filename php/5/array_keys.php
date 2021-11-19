<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";
$interests[] = "computer";
$keys = array_keys($interests);
print_r($keys);
echo "<br/>";
$searchKeys1 = array_keys($interests,"computer");
print_r($searchKeys1);
echo "<br/>";
$searchKeys2 = array_keys($interests,"Computer");
print_r($searchKeys2);
?>
