<?php
$array = array("img12.gif","img10.gif","img2.gif","img1.gif");
$newArray1 = array_reverse($array);
print_r($newArray1);
echo "<br/>";
$newArray2 = array_reverse($array,TRUE);
print_r($newArray2);
?>
