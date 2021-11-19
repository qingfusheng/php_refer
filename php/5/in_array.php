<?php
$words = array("JAVA","PHP",".NET");
$javaExisted = in_array("java",$words);
$phpExisted = in_array("PHP",$words);
var_dump($javaExisted);//输出：bool(false) 
echo "<br/>";
var_dump($phpExisted);//输出：bool(true) 
echo "<br/>";

$numbers = array("1.10", 12.4, 1.13);
$numExisted1 = in_array(1.10,$numbers);
$numExisted2 = in_array(1.10,$numbers,TRUE);
var_dump($numExisted1);//输出：bool(true) 
echo "<br/>";
var_dump($numExisted2);//输出：bool(false) 
?>