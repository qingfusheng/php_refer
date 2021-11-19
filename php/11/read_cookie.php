<?php 
$time = time()+3600; 
setcookie("name","victor",$time); 
setcookie("password","1234567",$time); 
setcookie("time",$time,$time); 
if(isset($_COOKIE["name"])){ 
     $name = $_COOKIE["name"]; 
     echo $name; 
     echo "<br/>"; 
}else{ 
     echo "HTTP请求头中没有名字为name的Cookie<br/>"; 
} 
if(isset($_COOKIE["password"])){ 
     $password = $_COOKIE["password"]; 
     echo $password; 
     echo "<br/>"; 
}else{ 
     echo "HTTP请求头中没有名字为password的Cookie<br/>"; 
} 
if(isset($_COOKIE["time"])){ 
     $time = $_COOKIE["time"]; 
     echo $time; 
     echo "<br/>"; 
}else{ 
     echo "HTTP请求头中没有名字为time的Cookie<br/>"; 
} 
?> 