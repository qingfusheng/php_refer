<?php
$test = "testing����һ�����ַ���������ʾ����һ���֣�";
echo mb_strpos($test, "һ",0,"gbk");//9
echo "<br/>";
echo mb_strrpos($test, "һ",0,"gbk");//21
?>
