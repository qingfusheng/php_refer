<?php
$str = "��ã����磡";
$len = mb_strlen("$str");
$new_string = "";
for ($i=$len;$i>=0;$i--){
	$new_string .= mb_substr($str,$i,1,'gbk');
}
echo $new_string;
?>
