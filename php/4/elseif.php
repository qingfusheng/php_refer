<?php
if(isset($_GET['score'])){
	$score = $_GET['score'];
}else{
	$score = -1;
	echo "请输入成绩!<br/>";
}

if($score>=90&&$score<=100){
	echo "成绩优秀！";
}elseif($score>=80&&$score<90){
	echo "成绩良好！";
}elseif($score>=60&&$score<80){
	echo "成绩及格！";
}elseif($score>=0){
	echo "成绩不及格！";
}
?>
