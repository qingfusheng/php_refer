<?php
var_dump(is_null($a));
echo "<br/>";
$b = NULL;
var_dump(is_null($b));
echo "<br/>";
$c = FALSE;
var_dump(is_null($c));
echo "<br/>";
unset($c);
var_dump(is_null($c));
echo "<br/>";
define("ABC",null);
$d = ABC
var_dump(is_null("ABC"));
?>
