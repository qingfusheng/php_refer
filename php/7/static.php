<?php
function plus(){
	static $sum = 0;
	$sum++;
	echo $sum;
	echo "<br/>";
}
plus();//�����1
plus();//�����2
?>
