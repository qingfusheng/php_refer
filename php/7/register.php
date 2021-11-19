<?php
include_once("functions/fileSystem.php");
if(empty($_POST)){
	exit("您提交的表单数据超过post_max_size的配置！<br/>");
}
echo "您填写的用户名为：".$_POST['userName'];
echo "<br/>";
echo "您注册的邮箱域名为：".$_POST['domain'];
echo "<br/>";
echo "您填写的登录密码为：".$_POST['password'];
echo "<br/>";
echo "您填写的确认密码为：".$_POST['confirmPassword'];
echo "<br/>";
echo "您填写的性别为：".$_POST['sex'];
echo "<br/>";
echo "您填写的个人爱好为：";
foreach($_POST['interests'] as $interest){
	echo $interest." ";
}
echo "<br/>";
$message = upload($_FILES['myPicture'],"uploads");
echo $message;
echo "<br/>";
echo "上传相片的文件大小不能超过：".$_POST['MAX_FILE_SIZE']."字节";
echo "<br/>";
echo "您填写的备注信息为：".$_POST['remark'];
echo "<br/>";
echo "您单击的提交按钮为：";
echo isset($_POST['submit1'])?"普通提交按钮":"图像提交按钮";
?>
