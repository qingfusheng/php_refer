<?php
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
var_dump($students["2010001"]["studentName"]);
echo "<br/>";
var_dump($students["2010001"]);
?>
