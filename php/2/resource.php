<?php
/*
ʹ��mysql_connect()��������һ��MySQL���ݿ�����ʱ����Ҫָ�����ݿ������������������IP��ַ�����û��������磺"root"�������루���磺""��
*/
$connection = mysql_connect("localhost","root","");
/*
ʹ��fopen()�����ԡ�r�����ķ�ʽ�򿪡�Student.class.php���ļ�
*/
$ioStream = fopen("Student.class.php","r");
/*
ʹ��var_dump()������������в�������������
*/
var_dump($connection);
echo "<br/>";
var_dump($ioStream);
?>
