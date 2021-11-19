<?php
$colors = array("red"=>"red","green"=>"green","white"=>"white","blue"=>"blue");
$colors["black"] = "black";//为数组添加数组元素："black"=>"black"
$colors["red"] = "#FF0000";//修改键为"red"的元素值："red"=>"#FF0000"
print_r($colors);
echo "<br/>";
if(isset($colors["green"])){//使用isset()函数判断键为"green"的数组元素是否定义
	echo "我喜欢绿色。";
}
echo "<br/>";
unset($colors["green"]);//使用unset()函数取消键为"green"的数组元素的定义
if(!isset($colors["green"])){
	echo "我又不喜欢绿色了。";
}
echo "<br/>";
echo gettype($colors["blue"]);//使用gettype()函数查看键为"blue"的数组元素的数据类型
echo "<br/>";
var_dump($colors["blue"]);//使用var_dump()函数得到键为"blue"的数组元素的数据类型
?>
