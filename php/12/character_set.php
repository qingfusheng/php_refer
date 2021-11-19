<?php
$str = "不同的PHP版本，htmlspecialchars()函数的使用方法不一样的！";
echo htmlspecialchars($str);//第一条echo语句
echo "<br/>";//第二条echo语句
echo htmlspecialchars($str,ENT_QUOTES,"GB2312");//第三条echo语句
?> 