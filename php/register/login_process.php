<?php 
include_once("functions/database.php"); 
//�ռ����ύ���� 
$userName = addslashes($_POST['userName']); 
$password = addslashes($_POST['password']); 
//�������ݿ������ 
getConnection(); 
//�ж��û����������Ƿ�������ȷ 
$sql = "select * from users where userName='$userName' and password='$password'"; 
$resultSet = mysql_query($sql); 
if(mysql_num_rows($resultSet)>0){ 
     echo "�û���������������ȷ����¼�ɹ���"; 
}else{ 
     echo "�û���������������󣡵�¼ʧ�ܣ�"; 
} 
closeConnection(); 
?> 