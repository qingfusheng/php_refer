<?php
if(isset($_GET['score'])){
	$score = $_GET['score'];
}else{
	$score = -1;
	echo "������ɼ�!<br/>";
}

if($score>=90&&$score<=100){
	echo "�ɼ����㣡";
}elseif($score>=80&&$score<90){
	echo "�ɼ����ã�";
}elseif($score>=60&&$score<80){
	echo "�ɼ�����";
}elseif($score>=0){
	echo "�ɼ�������";
}
?>
