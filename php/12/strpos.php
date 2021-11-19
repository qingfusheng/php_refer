<?php
$test = "testing这是一个长字符串，仅显示其中一部分！";
echo strpos($test, "一");//11
echo "<br/>";
echo strrpos($test, "一");//35
?>
