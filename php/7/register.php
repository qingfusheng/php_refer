<?php
include_once("functions/fileSystem.php");
if(empty($_POST)){
	exit("���ύ�ı����ݳ���post_max_size�����ã�<br/>");
}
echo "����д���û���Ϊ��".$_POST['userName'];
echo "<br/>";
echo "��ע�����������Ϊ��".$_POST['domain'];
echo "<br/>";
echo "����д�ĵ�¼����Ϊ��".$_POST['password'];
echo "<br/>";
echo "����д��ȷ������Ϊ��".$_POST['confirmPassword'];
echo "<br/>";
echo "����д���Ա�Ϊ��".$_POST['sex'];
echo "<br/>";
echo "����д�ĸ��˰���Ϊ��";
foreach($_POST['interests'] as $interest){
	echo $interest." ";
}
echo "<br/>";
$message = upload($_FILES['myPicture'],"uploads");
echo $message;
echo "<br/>";
echo "�ϴ���Ƭ���ļ���С���ܳ�����".$_POST['MAX_FILE_SIZE']."�ֽ�";
echo "<br/>";
echo "����д�ı�ע��ϢΪ��".$_POST['remark'];
echo "<br/>";
echo "���������ύ��ťΪ��";
echo isset($_POST['submit1'])?"��ͨ�ύ��ť":"ͼ���ύ��ť";
?>
