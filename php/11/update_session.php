<?php
session_start();
$_SESSION["password"] = md5("654321"); 
echo "�޸�Sessions��������Ϣ";
?>
<br/>
<a href="read_session.php">���¶�ȡSession�ļ��˻���Ϣ</a>
