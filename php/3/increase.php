<?php
$num1 = 2;
$num2 = ++$num1;//$num1先自加1，然后再将结果赋值给$num2；
$num3 = 2;
$num4 = $num3++;//先将$num3赋值给$num4，然后$num3自加1；
echo '$num1 = ',$num1;//输出：$num1 = 3
echo "<br/>";
echo '$num2 = ',$num2;//输出：$num2 = 3
echo "<br/>";
echo '$num3 = ',$num3;//输出：$num3 = 3
echo "<br/>";
echo '$num4 = ',$num4;//输出：$num4 = 2
?>
