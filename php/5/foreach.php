<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";
foreach($interests as $value){
	echo $value."<br/>";
}
foreach($interests as $key=>$value){
	echo $key."=>".$value."<br/>";
}
?>
