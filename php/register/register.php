<?php 
include_once("functions/fileSystem.php"); 
include_once("functions/database.php"); 
if(empty($_POST)){ 
     exit("���ύ�ı����ݳ���post_max_size�����ã�<br/>"); 
} 
$password = $_POST['password']; 
$confirmPassword = $_POST['confirmPassword']; 
if($password!=$confirmPassword){ 
     exit("����������ȷ�����벻��ȣ�"); 
} 
$userName = $_POST['userName']; 
$domain = $_POST['domain']; 
$userName = $userName.$domain; 
//�ж��û����Ƿ�ռ�� 
$userNameSQL = "select * from users where userName='$userName'"; 
getConnection(); 
$resultSet = mysql_query($userNameSQL); 
if(mysql_num_rows($resultSet)>0){ 
     closeConnection(); 
     exit("�û����Ѿ���ռ�ã�����������û�����"); 
} 
//�ռ��û�������Ϣ 
$sex = $_POST['sex']; 
if(empty($_POST['interests'])){ 
     $interests = ""; 
}else{ 
     $interests = implode(";",$_POST['interests']); 
} 
$remark = $_POST['remark']; 
$myPictureName = $_FILES['myPicture']['name']; 
//ֻ�С��ļ��ϴ��ɹ�����û���ϴ�������ʱ���Ž���ע�� 
$registerSQL = "insert into users values(null,'$userName','$password','$sex', '$interests','$myPictureName','$remark')"; 
$message = upload($_FILES['myPicture'],"uploads"); 
if($message=="�ļ��ϴ��ɹ���"||$message=="û��ѡ���ϴ�������"){ 
     mysql_query($registerSQL); 
     $userID = mysql_insert_id(); 
     echo "�û���Ϣ�ɹ�ע�ᣡ<br/>"; 
}else{ 
     exit($message); 
} 
//�����ݿ�����ȡ�û�ע����Ϣ 
$userSQL = "select * from users where user_id=$userID"; 
$userResult = mysql_query($userSQL); 
if($user = mysql_fetch_array($userResult)){ 
     echo "��ע����û���Ϊ��".$user["userName"]; 
}else{ 
     exit("�û���Ϣע��ʧ�ܣ�"); 
} 
closeConnection(); 
?> 