<?php
function plus(){
	static $sum = 0;
	$sum++;
	echo $sum;
	echo "<br/>";
}
plus();//Êä³ö£º1
plus();//Êä³ö£º2
?>
