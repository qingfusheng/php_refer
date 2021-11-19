<?php
function validate_cache_headers($my_modtime){  
	$pretty_modtime = gmdate('D, d M Y H:i:s',$my_modtime).'GMT';  
	if($_SERVER['IF_MODIFIED_SINCE'] == $gmt_mtime){  
		header("HTTP/1.1 304 Not Modified");  
		exit;
	}else{  
		header("Cache-Control: must-revalidate");  
		header("Last-Modified: $pretty_modtime");  
	}  
}  

validate_cache_headers(time());
echo date("Y-m-d H:i:s");
?>
