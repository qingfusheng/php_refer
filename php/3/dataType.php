<?php
define("USERNAME","root");
$score = 67.0;
$age = 20;
$words = array(2,4,6,8,10);

echo gettype(USERNAME);//�����string
echo "<br/>";
echo gettype($score);//�����double
echo "<br/>";
echo gettype($age);//�����integer
echo "<br/>";
echo gettype($words);//�����array
echo "<br/>";

var_dump(USERNAME);//�����string(4) "root"
echo "<br/>";
var_dump($score);//�����float(67) 
echo "<br/>";
var_dump($age);//�����int(20)
echo "<br/>";
var_dump($words);/*�����array(5) { [0]=>  int(2) [1]=>  int(4) [2]=>  int(6) [3]=>  int(8) [4]=>  int(10) } */
?>
