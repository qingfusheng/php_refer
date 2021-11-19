<?php
$varname = "age";
//用$$varname取代$age。下面的代码等价于：$age = 20;
$$varname = 20;
//输出$age变量的值：20
echo $age;
?>
