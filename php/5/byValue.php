<?php
$colors1 = array("red"=>"red","green"=>"green","white"=>"white");
$colors2 = $colors1;
$colors2["blue"] = "blue";//Ϊ����$colors2���Ԫ�أ�"blue"=>"blue"
$colors2["red"] = "#FF0000";//�޸�����$colors2������Ϊ"red"��Ԫ��ֵ��"red"=>"#FF0000"
print_r($colors1);
echo "<br/>";
print_r($colors2);//����� 
?>
