<?php
define("USERNAME","root");
$score = 67.0;
$age = 20;
$words = array(2,4,6,8,10);

echo gettype(USERNAME);//输出：string
echo "<br/>";
echo gettype($score);//输出：double
echo "<br/>";
echo gettype($age);//输出：integer
echo "<br/>";
echo gettype($words);//输出：array
echo "<br/>";

var_dump(USERNAME);//输出：string(4) "root"
echo "<br/>";
var_dump($score);//输出：float(67) 
echo "<br/>";
var_dump($age);//输出：int(20)
echo "<br/>";
var_dump($words);/*输出：array(5) { [0]=>  int(2) [1]=>  int(4) [2]=>  int(6) [3]=>  int(8) [4]=>  int(10) } */
?>
