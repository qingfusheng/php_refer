<?php
function addAge($age){
	global $age;
	$age = $age + 1;
	echo $age;
}
$age = 18;
addAge($age);//Êä³ö£º19
echo "<br/>";
echo $age;//Êä³ö£º19
?>
