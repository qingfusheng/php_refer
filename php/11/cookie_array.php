<?php 
$time = time()+3600; 
setcookie("name[1]","name1",$time);  
setcookie("name[2]","name2",$time); 
setcookie("name[one]","name one",$time);  
setcookie("name[two]","name two",$time);  
header("Location:cookie_list.php"); 
?>