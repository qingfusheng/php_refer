<?php
$colors = array("red"=>"red","green",3=>"white",5);
$students = array( 
	"2010001"=>
array("studentNo"=>"2010001","studentName"=>"����","studentSex"=>"��"),
	"2010002"=>
array("studentNo"=>"2010002","studentName"=>"����","studentSex"=>"Ů"),
	"2010003"=>
array("studentNo"=>"2010003","studentName"=>"����","studentSex"=>"��"),
	"2010004"=>
array("studentNo"=>"2010004","studentName"=>"����","studentSex"=>"Ů")
);
$countColors = count($colors);
$countstudents = count($students,1);
var_dump($countColors);//�����int(4) 
echo "<br/>";
var_dump($countstudents);//�����int(16) 
?>
