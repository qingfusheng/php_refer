<?php
$info = array('coffee', 'brown', 'caffeine');

list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.<br/>";

list($drink, , $power) = $info;
echo "$drink has $power.<br/>";

list( , , $power) = $info;
echo "I need $power!";
?>
