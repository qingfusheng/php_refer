<?php
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'white' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'black'   => 8);
$result = array_diff_key($array1, $array2); 
print_r($result);//Êä³ö£ºArray ( [red] => 2 [white] => 4 ) 
?>
