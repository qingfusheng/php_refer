<?php
$scores = array(70,80,90,60);
$grades = array('A','B','C','D');

$minScores = min($scores);
$minGrades = min($grades);

var_dump($minScores);//�����int(60)
echo "<br/>";
var_dump($minGrades);//�����string(1) "A"
?>
