<?php
session_start();
echo "��ȡSessions��Ϣ";
echo "<br/>";
echo "�û�����";
if(isset($_SESSION["user_name"])){
	echo $_SESSION["user_name"];
}else{
	echo "����";
}
echo "<br/>";
echo "�� �� ��";
if(isset($_SESSION["password"])){
	echo $_SESSION["password"];
}else{
	echo "����";
}
echo "<br/>";
?>
<br/>
<a href="update_session.php">�޸�Session�ļ��е�������Ϣ</a>
<br/>
<a href="delete_session.php">ɾ��Session�ļ��е�������Ϣ</a>
<br/>
<a href="delete_all_session.php">ɾ��Session�ļ��е�������Ϣ</a>
<br/>
<a href="destroy_session.php">����Session������Դ</a>
