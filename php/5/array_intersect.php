<?php
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "red", "yellow");
$result = array_intersect ($array1, $array2);
print_r($result);//�����Array ( [a] => green [0] => red ) 
?>
