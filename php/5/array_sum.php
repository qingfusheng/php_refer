<?php
$scores = array(70,80,90,60);
$grades = array('1A','2B','3C','4D');

$sumScores = array_sum($scores);
$sumGrades = array_sum($grades);

var_dump($sumScores);//�����int(300)  
echo "<br/>";
var_dump($sumGrades);//�����int(10)
?>
