<?php
$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;//此时变量$money值为整数123.1
$length = printf ("%1\$0.2f", $money);//变量$formatted值为字符串"123.10"
echo "<br>";
echo $length;
?>
