<?php
$scores = array(70,80,90,60);
$grades = array('A','B','C','D');

$maxScores = max($scores);
$maxGrades = max($grades);

var_dump($maxScores);//�����int(90) 
echo "<br/>";
var_dump($maxGrades);//�����string(1) "D"
?>
