<?php
$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;//��ʱ����$moneyֵΪ����123.1
$length = printf ("%1\$0.2f", $money);//����$formattedֵΪ�ַ���"123.10"
echo "<br>";
echo $length;
?>
