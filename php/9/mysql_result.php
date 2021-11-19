<?php
$serverLink = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
$selectSQL = "select * from student";
$resultSet = @mysql_db_query("student",$selectSQL);

echo "<br/>";
echo mysql_result($resultSet,0,0);
echo " ";
echo mysql_result($resultSet,0,1);
echo " ";
echo mysql_result($resultSet,0,2);
echo " ";
echo mysql_result($resultSet,0,3);
mysql_free_result($resultSet);
mysql_close($serverLink);
?>
