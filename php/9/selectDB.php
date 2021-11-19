<?php
$serverLink = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("student",$serverLink) or die("选择当前数据库失败!程序中断执 
行!");
if($dbLink){
	echo "选择student数据库为当前数据库！";
}
$close = @mysql_close($serverLink);
?>
