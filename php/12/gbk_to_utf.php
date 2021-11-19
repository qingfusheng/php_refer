<?php  
header("content-Type: text/html; charset=utf-8");  
echo mb_convert_encoding("你是我的好朋友", "UTF-8", "GBK");  
?>