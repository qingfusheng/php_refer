<?php 
include_once("functions/file_system.php"); 
if(empty($_POST)){ 
     $message = "�ϴ����ļ�������php.ini��post_max_sizeѡ�����Ƶ�ֵ"; 
}else{ 
     $user_id = 1; 
     $category_id = $_POST["category_id"]; 
     $title = $_POST["title"]; 
     $content = $_POST["content"]; 
     $currentDate =  date("Y-m-d H:i:s"); 
     $clicked = 0; 
     $file_name = $_FILES["news_file"]["name"]; 
     $message = upload($_FILES["news_file"],"uploads"); 
     $sql = "insert into news 
values(null,$user_id,$category_id,'$title','$content', '$currentDate',$clicked,'$file_name')"; 
     if($message=="�ļ��ϴ��ɹ���"||$message=="û��ѡ���ϴ�������"){ 
     		include_once("functions/database.php"); 
     		get_connection(); 
     		mysql_query($sql); 
     		close_connection();		 
     }	 
} 
$message = urlencode($message);
header("Location:news_list.php?message=$message"); 
?>