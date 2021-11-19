<?php
$colors = array("red"=>"red","green",3=>"white",5);
$students = array( 
	"2010001"=>
array("studentNo"=>"2010001","studentName"=>"张三","studentSex"=>"男"),
	"2010002"=>
array("studentNo"=>"2010002","studentName"=>"李四","studentSex"=>"女"),
	"2010003"=>
array("studentNo"=>"2010003","studentName"=>"王五","studentSex"=>"男"),
	"2010004"=>
array("studentNo"=>"2010004","studentName"=>"马六","studentSex"=>"女")
);
$countColors = count($colors);
$countstudents = count($students,1);
var_dump($countColors);//输出：int(4) 
echo "<br/>";
var_dump($countstudents);//输出：int(16) 
?>
