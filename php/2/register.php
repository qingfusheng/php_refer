<?php
$userName = $_GET["userName"];
$password = $_GET["password"];
$confirmPassword = $_GET["confirmPassword"];
if($password == $confirmPassword){
	echo "������ע����","<br/>","�����ܺ������Ϊ��",md5($password);
}else{
	echo "������������ȷ�����벻һ�£�������ע�ᣡ";
}
?>
