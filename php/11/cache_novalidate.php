<?php
function cache_novalidate($interval = 60){  
	$now = time(); 
	$pretty_lmtime = gmdate('D, d M Y H:i:s', $now) . ' GMT'; 
	$pretty_extime = gmdate('D, d M Y H:i:s', $now + $interval) . 'GMT'; 
	//向后兼容HTTP/1.0 
	header("Last Modified: $pretty_lmtime");  
	header("Expires: $pretty_extime");  
	//支持HTTP/1.1 
	header("Cache-Control: public,max-age=$interval");  
} 
cache_novalidate(60);
echo date("Y-m-d H:i:s");
?>
