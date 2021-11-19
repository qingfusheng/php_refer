<?php
//$a值为9，$b值为4。整个表达式（$a = ($b = 4) + 5）的值为9
var_dump($a = ($b = 4) + 5); 
echo "<br/>";
echo $a;
echo "<br/>";
echo $b;
?>
