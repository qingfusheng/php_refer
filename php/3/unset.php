<?php
$age1 = 18; 
$age2 = &$age1;
$age2 = 20;
echo $age1;
echo "<br/>";
unset($age1);//�����ȡ������$age1�Ķ���
echo $age1;//����$age1û�ж��壬����佫���notice��Ϣ
echo "<br/>";
echo $age2;
?>
