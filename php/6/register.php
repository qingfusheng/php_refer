<?php 
//���ύ�ı����ݳ���post_max_size�����ã��������ύʧ�ܣ�����������ִֹ�� 
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
$myPicture = $_FILES['myPicture']; 
$error = $myPicture['error']; 
switch ($error){ 
     case 0: 
          $myPictureName = $myPicture['name']; 
          echo "���ĸ�����ƬΪ��".$myPictureName. "<br/>"; 
          $myPictureTemp = $myPicture['tmp_name']; 
          $destination = "uploads/".$myPictureName; 
          move_uploaded_file($myPictureTemp,$destination); 
          echo "�ļ��ϴ��ɹ���<br/>"; 
          break; 
     case 1: 
          echo "�ϴ����ļ������� php.ini ��upload_max_filesizeѡ�����Ƶ�ֵ��<br/>"; 
          break; 
     case 2: 
          echo "�ϴ��ļ��Ĵ�С������FORM��MAX_FILE_SIZEѡ��ָ����ֵ��<br/>"; 
          break; 
     case 3: 
          echo "�ļ�ֻ�в��ֱ��ϴ���<br/>"; 
          break; 
     case 4: 
          echo "û��ѡ���ϴ��ļ���<br/>"; 
          break; 
} 
echo "<br/>"; 
echo "�ϴ���Ƭ���ļ���С���ܳ�����".$_POST['MAX_FILE_SIZE']."�ֽ�"; 
echo "<br/>"; 
echo "����д�ı�ע��ϢΪ��".$_POST['remark']; 
echo "<br/>"; 
echo "���������ύ��ťΪ��"; 
echo isset($_POST['submit1'])?"��ͨ�ύ��ť":"ͼ���ύ��ť"; 
?> 