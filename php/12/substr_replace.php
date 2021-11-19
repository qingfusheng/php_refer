<?php
$string = "abcdefghijklmnopqrstuvwxyz";
$replacement = ".....";
$new_string1 = substr_replace($string,$replacement,12);
echo $new_string1;
echo "<br/>";
$new_string2 = substr_replace($string,$replacement,-12);
echo $new_string2;
?>
