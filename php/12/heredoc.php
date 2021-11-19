<?php 
$name = "张三"; 
$submit = "提交"; 
$my_form = <<<form
<form> 
用户名：<input type="text" name="name" value="$name"><br/> 
密 码 ：<input type="password" name="password"><br/> 
<input type="submit" value="$submit"><br/> 
</form> 
form;
echo $my_form;
?> 