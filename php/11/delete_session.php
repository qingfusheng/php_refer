<?php
session_start();
unset($_SESSION["password"]); 
echo "删除Sessions中密码信息";
?>
<br/>
<a href="read_session.php">重新读取Session文件账户信息</a>
