<?php
$str = "��ͬ��PHP�汾��htmlspecialchars()������ʹ�÷�����һ���ģ�";
echo htmlspecialchars($str);//��һ��echo���
echo "<br/>";//�ڶ���echo���
echo htmlspecialchars($str,ENT_QUOTES,"GB2312");//������echo���
?> 