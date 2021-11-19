<?php
session_start();
$_SESSION["password"] = md5("654321"); 
echo "修改Sessions中密码信息";
?>
<br/>
<a href="read_session.php">重新读取Session文件账户信息</a>
