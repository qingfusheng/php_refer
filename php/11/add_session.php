<?php
session_start();
$_SESSION["user_name"] = "admin";
$_SESSION["password"] = md5("admin");
echo "添加Sessions信息";
?>
<br/>
<a href="read_session.php">读取Session信息</a>
