<?php
$interests[2] = "music";
$interests[5] = "movie";
$interests[1] = "computer";
$interests[] = "software";
$each = each($interests);//��������ʽ����currentָ����ָ��Ԫ�أ�Ȼ��currentָ��ָ����һ��Ԫ��
print_r($each);
echo "<br/>";
echo current($interests);//��ǰcurrentָ��ָ���2��Ԫ��
?>
