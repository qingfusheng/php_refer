<?php 
include_once("functions/database.php"); 
$review_id = $_GET["review_id"]; 
$sql = "delete from review where review_id=$review_id"; 
get_connection(); 
$result_set = mysql_query($sql); 
close_connection(); 
header("Location:review_list.php"); 
?> 