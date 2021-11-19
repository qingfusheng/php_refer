<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";
$each = each($interests);//以数组形式返回current指针所指的元素，然后将current指针指向下一个元素
print_r($each);
echo "<br/>";
echo current($interests);//当前current指针指向第2个元素
?>
