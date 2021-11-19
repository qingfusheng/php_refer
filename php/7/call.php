<?php
//函数的声明
include_once("functions/makeNine.php");
include_once("functions/makeNineWithParams.php");
include_once("functions/maxValue.php");
//函数的调用
$functionName = "makeNine";
$functionName();
echo "<hr/>";
$functionName = "makeNineWithParams";
$functionName('+');
echo "<hr/>";
makeNineWithParams('*',2);
echo "<hr/>";
$functionName = "maxValue";
echo $functionName();
echo "<hr/>";
echo $functionName(200,100);
?>
