<?php
$serverLink = @mysql_connect("localhost","root","") or die("���ӷ�����ʧ��!�����ж�ִ��!");
mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("unknown");
echo mysql_errno();
echo "<br/>";
echo mysql_error();
mysql_close($serverLink);
?>
