<?php
$serverLink = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
$selectSQL = "select * from student";
$resultSet = @mysql_db_query("student",$selectSQL);
var_dump(mysql_fetch_row($resultSet));
echo "<br/>";
var_dump(mysql_fetch_lengths($resultSet));
mysql_free_result($resultSet);
mysql_close($serverLink);
?>
