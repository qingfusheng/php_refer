<?php
$serverLink = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("student") or die("选择当前数据库失败!程序中断执行!");
$selectSQL = "select * from student";
$resultSet = mysql_query($selectSQL);
while($student = mysql_fetch_row($resultSet)){
	echo $student[0]." ";
	echo $student[1]." ";
	echo $student[2]."<br/>";
}
mysql_free_result($resultSet);
mysql_close($serverLink);
?>
