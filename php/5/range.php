<?php
$numbers = range(1,5);//等价于$numbers = array(1,2,3,4,5)
print_r($numbers);
echo "<br/>";
$chars1 = range('a','d');//等价于$ chars1 = array('a','b','c','d')
print_r($chars1);
echo "<br/>";
$chars2 = range('d','a');//等价于$ chars2 = array('d','c','b','a')
print_r($chars2);
?>
