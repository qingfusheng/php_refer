<?php
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
var_dump($students["2010001"]["studentName"]);
echo "<br/>";
var_dump($students["2010001"]);
?>
