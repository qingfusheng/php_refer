<?php
$serverLink = @mysql_connect("localhost","root","") or die("���ӷ�����ʧ��!�����ж�ִ��!");
mysql_query("set names 'gbk'");
$resultSet = mysql_query("show databases");
while($db = mysql_fetch_array($resultSet)){
	echo $db["Database"]."<br/>";
}
mysql_free_result($resultSet);
mysql_close($serverLink);
?>
