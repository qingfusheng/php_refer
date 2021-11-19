<?php 
var_dump(is_null($a)); //抛出$a变量未定义Notice信息，然后输出true
echo "<br/>"; 
var_dump(empty($a));//直接输出true
echo "<br/>"; 
var_dump(isset($a));//直接输出false
?>  