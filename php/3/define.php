<?php
//定义DATABASE常量，此时DATABASE常量名大小写敏感
define("DATABASE","student");
//定义USER_NAME常量，此时USER_NAME大小写敏感
define("USER_NAME","root",FALSE);
//定义PASSWORD常量，此时PASSWORD大小写不敏感
define("PASSWORD","root",TRUE);
echo DATABASE;//输出：student
echo "<br/>";
echo USER_NAME;//输出：root
echo "<br/>";
echo password;//输出：root
?>
