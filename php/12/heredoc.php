<?php 
$name = "����"; 
$submit = "�ύ"; 
$my_form = <<<form
<form> 
�û�����<input type="text" name="name" value="$name"><br/> 
�� �� ��<input type="password" name="password"><br/> 
<input type="submit" value="$submit"><br/> 
</form> 
form;
echo $my_form;
?> 