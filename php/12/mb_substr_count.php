<?php
$text = 'testing����һ�����ַ���������ʾ����һ���֣�';
echo mb_substr_count($text, 'һ',"gbk"); // 2
?>
