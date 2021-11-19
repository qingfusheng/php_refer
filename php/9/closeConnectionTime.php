<?php
function student_query(){
	$selectSQL = "select * from student";
	$resultSet = mysql_query($selectSQL) or die(mysql_error());
	while($student = mysql_fetch_array($resultSet)){
		echo $student['student_id']." ";
		echo $student['student_no']." ";
		echo $student['student_name']."<br/>";
	}
	mysql_free_result($resultSet);

}
$serverLink = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("student") or die("选择当前数据库失败!程序中断执行!");
student_query();
student_query();
mysql_close($serverLink);
?>
