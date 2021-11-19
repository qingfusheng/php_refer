<?php
$password1 = 11;
$password2 = "11";
if(strcmp($password1,$password2)==0){
	echo "使用strcmp()函数比较两次输入的密码相等！";
}else{
	echo "使用strcmp()函数比较两次输入的密码不相等！";
}
echo "<br/>";
if($password1===$password2){
	echo "使用===比较两次输入的密码相等！";
}else{
	echo "使用===比较两次输入的密码不相等！";
}
?>
