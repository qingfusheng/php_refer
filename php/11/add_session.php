<?php
session_start();
$_SESSION["user_name"] = "admin";
$_SESSION["password"] = md5("admin");
echo "���Sessions��Ϣ";
?>
<br/>
<a href="read_session.php">��ȡSession��Ϣ</a>
