<?php 
include_once("functions/is_login.php"); 
session_start(); 
if(!is_login()){ 
     echo "请您登录系统后，再访问该页面！"; 
     return; 
} 
?> 
<?php 
include_once("functions/database.php"); 
$news_id = $_GET["news_id"]; 
get_connection(); 
mysql_query("delete from review where news_id=$news_id"); 
mysql_query("delete from news where news_id=$news_id"); 
close_connection(); 
$message = "新闻及相关评论信息删除成功！"; 
header("Location:news_list.php?message=$message"); 
?> 