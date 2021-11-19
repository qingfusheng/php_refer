<?php
/*
使用mysql_connect()函数建立一个MySQL数据库连接时，需要指定数据库服务器的主机名（或IP地址）、用户名（例如："root"）和密码（例如：""）
*/
$connection = mysql_connect("localhost","root","");
/*
使用fopen()函数以“r”读的方式打开“Student.class.php”文件
*/
$ioStream = fopen("Student.class.php","r");
/*
使用var_dump()函数输出函数中参数的数据类型
*/
var_dump($connection);
echo "<br/>";
var_dump($ioStream);
?>
