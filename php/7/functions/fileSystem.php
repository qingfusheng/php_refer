<?php
function upload($file,$filePath){
	$error = $file['error'];
	switch ($error){
		case 0:
			$fileName = $file['name'];
			$fileTemp = $file['tmp_name'];
			$destination = $filePath."/".$fileName;
			move_uploaded_file($fileTemp,$destination);
			return "�ļ��ϴ��ɹ���";
		case 1:
			return "�ϴ�����������php.ini��upload_max_filesizeѡ�����Ƶ�ֵ��";
		case 2:
			return "�ϴ������Ĵ�С������form��MAX_FILE_SIZEѡ��ָ����ֵ��";
		case 3:
			return "����ֻ�в��ֱ��ϴ���";
		case 4:
			return "û��ѡ���ϴ�������";
	}
}
?>
