<?php
$array1 = $array2 = array("c"=>"China","f"=>"French","e"=>"English");
ksort($array1);
print_r($array1);
echo "<br/>";
krsort($array2);
print_r($array2);
?>
