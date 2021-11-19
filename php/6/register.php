<?php 
//若提交的表单数据超过post_max_size的配置，表单数据提交失败，程序立即终止执行 
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
$myPicture = $_FILES['myPicture']; 
$error = $myPicture['error']; 
switch ($error){ 
     case 0: 
          $myPictureName = $myPicture['name']; 
          echo "您的个人相片为：".$myPictureName. "<br/>"; 
          $myPictureTemp = $myPicture['tmp_name']; 
          $destination = "uploads/".$myPictureName; 
          move_uploaded_file($myPictureTemp,$destination); 
          echo "文件上传成功！<br/>"; 
          break; 
     case 1: 
          echo "上传的文件超过了 php.ini 中upload_max_filesize选项限制的值！<br/>"; 
          break; 
     case 2: 
          echo "上传文件的大小超过了FORM表单MAX_FILE_SIZE选项指定的值！<br/>"; 
          break; 
     case 3: 
          echo "文件只有部分被上传！<br/>"; 
          break; 
     case 4: 
          echo "没有选择上传文件！<br/>"; 
          break; 
} 
echo "<br/>"; 
echo "上传相片的文件大小不能超过：".$_POST['MAX_FILE_SIZE']."字节"; 
echo "<br/>"; 
echo "您填写的备注信息为：".$_POST['remark']; 
echo "<br/>"; 
echo "您单击的提交按钮为："; 
echo isset($_POST['submit1'])?"普通提交按钮":"图像提交按钮"; 
?> 