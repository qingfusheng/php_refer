<?php
$text = 'testing这是一个长字符串，仅显示其中一部分！';
echo mb_substr_count($text, '一',"gbk"); // 2
?>
