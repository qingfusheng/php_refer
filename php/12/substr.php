<?php
$string = 'abcdef';
echo substr($string,1);     // bcdef
echo "<br/>";
echo substr($string,1,3);  // bcd
echo "<br/>";
echo substr($string,0,4);  // abcd
echo "<br/>";
echo substr($string,0,8);  // abcdef
echo "<br/>";
echo substr($string,-1,1); // f
?>
