<?php
if(empty($_POST)){
	exit("���ύ�ı����ݳ���post_max_size�����ã�<br/>");
}
$count = count($_FILES['myFile']['name']);
for($i=0;$i<$count;$i++){
	$myFile = $_FILES['myFile'];
	$error = $myFile["error"][$i];
	switch ($error){
		case 0:
			$fileName = $myFile['name'][$i];
			echo "���ϴ����ļ��У�".$fileName. "<br/>";
			$fileTemp = $myFile['tmp_name'][$i];
			$destination = "uploads/".$fileName;
			move_uploaded_file($fileTemp,$destination);
			break;
		case 1:
			echo "�ϴ���ĳЩ�ļ�������php.ini ��upload_max_filesizeѡ�����Ƶ�ֵ��<br/>";
			break;
		case 2:
			echo "�ϴ���ĳЩ�ļ�������FORM��MAX_FILE_SIZEѡ��ָ����ֵ��<br/>";
			break;
		case 3:
			echo "ĳЩ�ļ�ֻ�в��ֱ��ϴ���<br/>";
			break;
		case 4:
			echo "û��ѡ���ϴ��ļ���<br/>";
			break;
	}
}
?>