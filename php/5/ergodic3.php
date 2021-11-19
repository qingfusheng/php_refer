<?php
$colors = array('orange', 'red', 'yellow');
$fruits = array('orange', 'apple', 'banana');
$temp = array_combine($colors, $fruits);

reset($temp);
while(list($key,$value) = each($temp)){
	echo $key."==>".$value."<br/>";
}
?>
