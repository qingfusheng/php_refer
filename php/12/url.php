<?php
$url = "http://nobody:secret@example.com:80/script.php?var1=value1&var2=value2#anchor";
$parse_url = parse_url($url);
var_dump($parse_url);
$query_string = $parse_url["query"];
parse_str($query_string);
echo "<br/>";
echo $var1;
echo "<br/>";
echo $var2;
?>
