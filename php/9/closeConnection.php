<?php
$serverLink = @mysql_connect("localhost","root","") or die("���ӷ�����ʧ��!�����ж�ִ��!");
mysql_query("set names 'gbk'");
if($serverLink){
	echo "��MySQL���������ӳɹ���<br/>";
}
$close = @mysql_close($serverLink);
if($close){
	echo "�ر�MySQL���������ӳɹ�!<br/>";
}else{
	exit("�ر�MySQL����������ʧ��!�����ж�ִ��!");
}
?>
