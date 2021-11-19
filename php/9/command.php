<?php
$serverLink = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
$resultSet = mysql_query("show databases");
while($db = mysql_fetch_array($resultSet)){
	echo $db["Database"]."<br/>";
}
mysql_free_result($resultSet);
mysql_close($serverLink);
?>
