<?php
$age1 = 18; 
$age2 = &$age1;
$age2 = 20;
echo $age1;
echo "<br/>";
unset($age1);//该语句取消变量$age1的定义
echo $age1;//由于$age1没有定义，该语句将输出notice信息
echo "<br/>";
echo $age2;
?>
