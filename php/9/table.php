<?php
$server_link = @mysql_connect("localhost","root","") or die("���ӷ�����ʧ��!�����ж�ִ��!");
mysql_query("set names 'gbk'");
$resultSet = @mysql_list_tables("student");
for($i = 0; $i < mysql_num_rows($resultSet); $i++){
	printf ("��: %s<br/>", mysql_tablename($resultSet, $i));
}
mysql_free_result($resultSet);
mysql_close($server_link);
?>
