<?php
function addAge(&$value){
	$value = $value + 1;
	echo $value;
}
$age = 18;
addAge($age);//�����19
echo "<br/>";
echo $age;//�����19
?>
