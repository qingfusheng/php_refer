<?php
if(isset($_GET['userName'])){
	$userName = $_GET['userName'];
}else{
	$userName = "";
	echo "�������û���<br/>";
}
if(isset($_GET['password'])){
	$password = $_GET['password'];
}else{
	$password = "";
	echo "����������<br/>";
}
if($userName=="admin"&&$password=="admin"){
	echo "��������û���������ƥ�䣡";
}else{
	echo "��������û��������벻ƥ�䣡";
}
?>
