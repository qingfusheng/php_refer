<?php
$scores = array(70,80,90,60);
$grades = array('A','B','C','D');

$minScores = min($scores);
$minGrades = min($grades);

var_dump($minScores);//Êä³ö£ºint(60)
echo "<br/>";
var_dump($minGrades);//Êä³ö£ºstring(1) "A"
?>
