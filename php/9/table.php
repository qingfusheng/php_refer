<?php
$server_link = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
$resultSet = @mysql_list_tables("student");
for($i = 0; $i < mysql_num_rows($resultSet); $i++){
	printf ("表: %s<br/>", mysql_tablename($resultSet, $i));
}
mysql_free_result($resultSet);
mysql_close($server_link);
?>
