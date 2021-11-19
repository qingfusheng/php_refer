<?php
$a = 12;    	//  12=00001100
$b = 3;     	//   3=00000011
echo $a & $b;	// 输出：0
echo "<br/>";
echo $a | $b;	//输出：15
echo "<br/>";
echo $a ^ $b;	//输出：15
echo "<br/>";
echo ~$a;   	// 输出：-13
echo "<br/>";
echo $a << $b;	//输出：96
echo "<br/>";
echo $a >> $b;	//输出：1
?>
