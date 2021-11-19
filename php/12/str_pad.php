<?php
$string = "abcdefghijklmnopqrstuvwxyz";
$pad_string = "+#";
$pad_both = str_pad($string,30,$pad_string,STR_PAD_BOTH);
$pad_right = str_pad($string,30,$pad_string);
$pad_left = str_pad($string,30,$pad_string,STR_PAD_LEFT);
echo $pad_both;
echo "<br/>";
echo $pad_right;
echo "<br/>";
echo $pad_left;
?>
