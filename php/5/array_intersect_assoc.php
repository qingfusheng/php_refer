<?php
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "red", "yellow");
$result = array_intersect_assoc ($array1, $array2);
print_r($result);//�����Array ( [0] => red ) 
?>
