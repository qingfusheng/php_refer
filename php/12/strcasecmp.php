<?php
$email1 = "admin@163.com";
$email2 = "Admin@163.com";
if(strcasecmp($email1,$email2)==0){
	echo "两次输入的Email地址相等！";
}else{
	echo "两次输入的Email地址不相等！";
}
?>
