<?php
$age1 = 18; 
//进行传地址赋值，变量$age1的地址（引用）赋值给变量$age2
$age2 = &$age1;
$age2 = 20;
echo $age1;//该语句输出$age1变量的值为20
echo "<br/>";
echo $age2;//该语句输出$age2变量的值为20
?>
