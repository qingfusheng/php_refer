<?php
if(isset($_GET['userName'])){
	$userName = $_GET['userName'];
}else{
	$userName = "";
	echo "请输入用户名<br/>";
}
if(isset($_GET['password'])){
	$password = $_GET['password'];
}else{
	$password = "";
	echo "请输入密码<br/>";
}
if($userName=="admin"&&$password=="admin"){
	echo "您输入的用户名和密码匹配！<br/>";
}else{
	if($userName!="admin"){
		echo "用户名填写错误！<br/>";
	}
	if($password!="admin"){
		echo "密码填写错误！";
	}
}
?>