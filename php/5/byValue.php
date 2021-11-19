<?php
$colors1 = array("red"=>"red","green"=>"green","white"=>"white");
$colors2 = $colors1;
$colors2["blue"] = "blue";//为数组$colors2添加元素："blue"=>"blue"
$colors2["red"] = "#FF0000";//修改数组$colors2“键”为"red"的元素值："red"=>"#FF0000"
print_r($colors1);
echo "<br/>";
print_r($colors2);//输出： 
?>
