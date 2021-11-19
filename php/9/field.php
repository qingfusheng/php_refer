<?php
$serverLink = @mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行!");
mysql_query("set names 'gbk'");
$selectSQL = "select * from student";
$resultSet = @mysql_db_query("student",$selectSQL);
$fieldsNum = mysql_num_fields($resultSet);
echo "student表共有".$fieldsNum."个字段，各个字段属性如下：";
echo "<br/>";
echo "<table>";
echo "<tr><td>字段名</td><td>字段类型</td><td>字段长度</td><td>字段标识</td></tr>";
for($i=0;$i<$fieldsNum;$i++){
	echo "<tr>";
	echo "<td>".mysql_field_name($resultSet,$i)."</td>";
	echo "<td>".mysql_field_type($resultSet,$i)."</td>";
	echo "<td>".mysql_field_len($resultSet,$i)."</td>";
	echo "<td>".mysql_field_flags($resultSet,$i)."</td>";
	echo "</tr>";
}
echo "</table>";
mysql_free_result($resultSet);
mysql_close($serverLink);
?>
