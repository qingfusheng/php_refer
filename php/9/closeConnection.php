<?php
$serverLink = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
if($serverLink){
	echo "与MySQL服务器连接成功！<br/>";
}
$close = @mysql_close($serverLink);
if($close){
	echo "关闭MySQL服务器连接成功!<br/>";
}else{
	exit("关闭MySQL服务器连接失败!程序中断执行!");
}
?>
