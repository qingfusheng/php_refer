<?php
$serverLink = @mysql_connect("localhost","root","") or die("���ӷ�����ʧ��!�����ж�ִ��!");
mysql_query("set names 'gbk'");
$selectSQL = "select * from student";
$resultSet = @mysql_db_query("student",$selectSQL);
$fieldsNum = mysql_num_fields($resultSet);
echo "student����".$fieldsNum."���ֶΣ������ֶ��������£�";
echo "<br/>";
echo "<table>";
echo "<tr><td>�ֶ���</td><td>�ֶ�����</td><td>�ֶγ���</td><td>�ֶα�ʶ</td></tr>";
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
