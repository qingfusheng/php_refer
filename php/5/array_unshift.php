<?php
$queue = array("orange", "banana");
$counts = array_unshift($queue, "apple", "pear");
print_r($queue);
echo "<br/>";
echo $counts;
?>
