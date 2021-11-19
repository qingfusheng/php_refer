<?php
$info = array('coffee', 'brown', 'caffeine');

$tea1 = array_pad($info, 5, 'tea');
$tea2 = array_pad($info, -7, 'tea');
$tea3 = array_pad($info, 2, 'tea');
print_r($tea1);
echo "<br/>";
print_r($tea2);
echo "<br/>";
print_r($tea3);
?>
