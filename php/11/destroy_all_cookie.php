<?php 
$time = time()-3600; 
foreach($_COOKIE as $key=>$value){
setcookie($key,'',$time);
}
?>  