<?php
function addAge(&$age){
	$age = $age + 1;
	echo $age;
}
$age = 18;
addAge(20);//�����19
?>
