<?php
function cache_none(){  
	//������HTTP/1.0  
	header("Expires: 0");  
	header("Pragma: no-cache");  
	//֧��HTTP/1.1  
	header("Cache-Control: no-cache,no-store,max-age=0,s-maxage=0,must-revalidate");  
}  
cache_none();
echo date("Y-m-d H:i:s");
?>
