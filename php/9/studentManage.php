<?php
$serverLink = @mysql_connect("localhost","root","") or die("���ӷ�����ʧ��!�����ж�ִ��!");
mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("student") or die("ѡ��ǰ���ݿ�ʧ��!�����ж�ִ��!");
$insertSQL = "insert into student values(null,'test','test',2)";
$updateSQL = "update student set class_id=1 where student_name='test'";
$deleteSQL = "delete from student where student_name='test'";
$inserted = mysql_query($insertSQL);
echo "��ǰ�����¼��student_idֵΪ��".mysql_insert_id()."<br/>";
$insertedRows = mysql_affected_rows();
echo "�����¼��������$insertedRows<br/>";
$updated = mysql_query($updateSQL);
$updatedRows = mysql_affected_rows();
echo "�޸ļ�¼��������$updatedRows<br/>";
$deleted = mysql_query($deleteSQL);
$deletedRows = mysql_affected_rows();
echo "ɾ����¼��������$deletedRows<br/>";
$close = @mysql_close($serverLink);
?>
