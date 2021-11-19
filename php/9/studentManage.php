<?php
$serverLink = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("student") or die("选择当前数据库失败!程序中断执行!");
$insertSQL = "insert into student values(null,'test','test',2)";
$updateSQL = "update student set class_id=1 where student_name='test'";
$deleteSQL = "delete from student where student_name='test'";
$inserted = mysql_query($insertSQL);
echo "当前插入记录的student_id值为：".mysql_insert_id()."<br/>";
$insertedRows = mysql_affected_rows();
echo "插入记录的行数：$insertedRows<br/>";
$updated = mysql_query($updateSQL);
$updatedRows = mysql_affected_rows();
echo "修改记录的行数：$updatedRows<br/>";
$deleted = mysql_query($deleteSQL);
$deletedRows = mysql_affected_rows();
echo "删除记录的行数：$deletedRows<br/>";
$close = @mysql_close($serverLink);
?>
