<?php
function addAge($age){
	global $age;
	$age = $age + 1;
	echo $age;
}
$age = 18;
addAge($age);//�����19
echo "<br/>";
echo $age;//�����19
?>
