<?php
//����������
include_once("functions/makeNine.php");
include_once("functions/makeNineWithParams.php");
include_once("functions/maxValue.php");
//�����ĵ���
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
