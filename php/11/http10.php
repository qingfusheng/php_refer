<?php
function http_10_cache($lifeTime=60){  
	$gmtime = time(); 
	if ($lifeTime){
		$gmtime += $lifeTime;
		$gmtime = gmdate('D, d M Y H:i:s',$gmtime).' GMT';
		header("Last-Modified: $gmtime");
		header("Expires: $gmtime");
	}else{
		header("Pragma: no-cache");
	}
}
http_10_cache(0);
echo date("Y年m月d日H时i分s秒");
?>
