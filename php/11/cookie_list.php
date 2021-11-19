<?php 
echo "Cookie中键名name的下标与取值之间的对应关系依次如下：<br/>";    
foreach($_COOKIE["name"] as $key => $value){ 
     echo $key,"=>",$value,"<br/>"; 
} 
?> 