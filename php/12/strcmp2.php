<?php
$password1 = 11;
$password2 = "11";
if(strcmp($password1,$password2)==0){
	echo "ʹ��strcmp()�����Ƚ����������������ȣ�";
}else{
	echo "ʹ��strcmp()�����Ƚ�������������벻��ȣ�";
}
echo "<br/>";
if($password1===$password2){
	echo "ʹ��===�Ƚ����������������ȣ�";
}else{
	echo "ʹ��===�Ƚ�������������벻��ȣ�";
}
?>
