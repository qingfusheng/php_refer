<?php
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "red", "yellow");
$result = array_diff_assoc($array1, $array2);
print_r($result);//�����Array ( [a] => green [1] => blue [2] => red ) 
?>
