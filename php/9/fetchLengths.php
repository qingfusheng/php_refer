<?php
$serverLink = @mysql_connect("localhost","root","") or die("���ӷ�����ʧ��!�����ж�ִ��!");
mysql_query("set names 'gbk'");
$selectSQL = "select * from student";
$resultSet = @mysql_db_query("student",$selectSQL);
var_dump(mysql_fetch_row($resultSet));
echo "<br/>";
var_dump(mysql_fetch_lengths($resultSet));
mysql_free_result($resultSet);
mysql_close($serverLink);
?>
