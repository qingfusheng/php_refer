<?php
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "red", "yellow");
$result = array_diff($array1, $array2);
print_r($result);//�����Array ( [1] => blue ) 
?>
