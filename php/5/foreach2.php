<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";
foreach($interests as $key=>$value){
	$interests[$key] = "I like ".$value;
}
print_r($interests);
?>
