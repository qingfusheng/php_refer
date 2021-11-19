<?php
define("DATABASE","student");
//重新定义DATABASE常量，此时将出现Notice信息
define("DATABASE","root",FALSE);
echo DATABASE;//输出：student
?>
