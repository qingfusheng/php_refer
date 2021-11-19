<?php
$scores = array(70,80,90,60);
$grades = array('A','B','C','D');

$maxScores = max($scores);
$maxGrades = max($grades);

var_dump($maxScores);//Êä³ö£ºint(90) 
echo "<br/>";
var_dump($maxGrades);//Êä³ö£ºstring(1) "D"
?>
