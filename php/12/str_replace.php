<?php
$string = "Hello world";
$occurrence = "o";
$replacement = "<i><b>o</b></i>";
$new_string = str_replace($occurrence,$replacement,$string);
echo $new_string;
?>
