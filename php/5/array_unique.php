<?php
$colors = array("a" => "green", "red", "b" => "green", "blue", "red");
$colorUnique = array_unique($colors);
print_r($colorUnique);
echo "<br/>";
$input = array(4, "4", "3", 4, 3, "3");
$inputUnique = array_unique($input);
print_r($inputUnique);
?>
