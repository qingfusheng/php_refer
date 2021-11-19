<?php
$test = "testing这是一个长字符串，仅显示其中一部分！";
echo mb_strpos($test, "一",0,"gbk");//9
echo "<br/>";
echo mb_strrpos($test, "一",0,"gbk");//21
?>
