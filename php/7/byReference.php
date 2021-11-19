<?php
function addAge(&$value){
	$value = $value + 1;
	echo $value;
}
$age = 18;
addAge($age);//Êä³ö£º19
echo "<br/>";
echo $age;//Êä³ö£º19
?>
