<?php
$userName = $_GET["userName"];
$password = $_GET["password"];
$confirmPassword = $_GET["confirmPassword"];
if($password == $confirmPassword){
	echo "您可以注册了","<br/>","您加密后的密码为：",md5($password);
}else{
	echo "您输入的密码和确认密码不一致，请重新注册！";
}
?>
