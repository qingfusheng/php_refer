<?php
$string = 'testing这是一个长字符串，仅显示其中一部分！';
echo mb_substr($string,0,10);
echo "<br/>";
echo mb_substr($string,0,11);
?>
