<?php
$serverLink = @mysql_connect("localhost","root","") or die("���ӷ�����ʧ��!�����ж�ִ��!");
mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("student",$serverLink) or die("ѡ��ǰ���ݿ�ʧ��!�����ж�ִ 
��!");
if($dbLink){
	echo "ѡ��student���ݿ�Ϊ��ǰ���ݿ⣡";
}
$close = @mysql_close($serverLink);
?>
