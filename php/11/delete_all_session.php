<?php
session_start();
$_SESSION = array();
echo "删除Session所有信息";
?>
<br/>
<a href="read_session.php">重新读取Session文件账户信息</a>
