<?php
$info = array("studentNo"=>"20080101001","studentName"=>"张三","studentSex"=>"男");
extract($info);
echo $studentNo;//输出：20080101001
echo "<br/>";
echo $studentName;//输出：张三
echo "<br/>";
echo $studentSex;//输出：男
?>
