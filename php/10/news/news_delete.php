<?php 
include_once("functions/database.php"); 
$news_id = $_GET["news_id"]; 
get_connection(); 
mysql_query("delete from review where news_id=$news_id"); 
mysql_query("delete from news where news_id=$news_id"); 
close_connection(); 
$message = "���ż����������Ϣɾ���ɹ���"; 
header("Location:news_list.php?message=$message"); 
?> 