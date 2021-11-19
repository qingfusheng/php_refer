<?php
if(empty($_POST)){
	exit("您提交的表单数据超过post_max_size的配置！<br/>");
}
$count = count($_FILES['myFile']['name']);
for($i=0;$i<$count;$i++){
	$myFile = $_FILES['myFile'];
	$error = $myFile["error"][$i];
	switch ($error){
		case 0:
			$fileName = $myFile['name'][$i];
			echo "您上传的文件有：".$fileName. "<br/>";
			$fileTemp = $myFile['tmp_name'][$i];
			$destination = "uploads/".$fileName;
			move_uploaded_file($fileTemp,$destination);
			break;
		case 1:
			echo "上传的某些文件超过了php.ini 中upload_max_filesize选项限制的值！<br/>";
			break;
		case 2:
			echo "上传的某些文件超过了FORM表单MAX_FILE_SIZE选项指定的值！<br/>";
			break;
		case 3:
			echo "某些文件只有部分被上传！<br/>";
			break;
		case 4:
			echo "没有选择上传文件！<br/>";
			break;
	}
}
?>