<?php
$colors = array("red"=>"red","green"=>"green","white"=>"white","blue"=>"blue");
$colors["black"] = "black";//Ϊ�����������Ԫ�أ�"black"=>"black"
$colors["red"] = "#FF0000";//�޸ļ�Ϊ"red"��Ԫ��ֵ��"red"=>"#FF0000"
print_r($colors);
echo "<br/>";
if(isset($colors["green"])){//ʹ��isset()�����жϼ�Ϊ"green"������Ԫ���Ƿ���
	echo "��ϲ����ɫ��";
}
echo "<br/>";
unset($colors["green"]);//ʹ��unset()����ȡ����Ϊ"green"������Ԫ�صĶ���
if(!isset($colors["green"])){
	echo "���ֲ�ϲ����ɫ�ˡ�";
}
echo "<br/>";
echo gettype($colors["blue"]);//ʹ��gettype()�����鿴��Ϊ"blue"������Ԫ�ص���������
echo "<br/>";
var_dump($colors["blue"]);//ʹ��var_dump()�����õ���Ϊ"blue"������Ԫ�ص���������
?>
