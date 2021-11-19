<?php 
$a = NULL;
var_dump(is_null($a)); //直接输出true
var_dump(is_null($b)); //抛出$b变量未定义Notice信息，然后输出true
?> 