<?php
function addAge($age){
	$age = $age + 1;
	echo $age;
}
$age = 18;
addAge($age);//�����19
echo "<br/>";
echo $age;//�����18
?>
