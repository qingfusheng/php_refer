<?php
$colors = array('orange', 'red', 'yellow');
$fruits = array('orange', 'apple', 'banana');
$temp = array_combine($colors, $fruits);
reset($temp);
do{
	$key = key($temp);
	$value = current($temp);
	echo $key."&nbsp;==>&nbsp;".$value."<br/>";
}while(next($temp));
?>
