<?php 
$databaseConnection = null;
function getConnection(){
	$hostname = "localhost"; //���ݿ������������,������IP����
	$database = "users"; //���ݿ���
	$userName = "root"; //���ݿ�������û���
	$password = ""; //���ݿ����������
	global $databaseConnection;
	$databaseConnection = @mysql_connect($hostname, $userName, $password) or die(mysql_error()); //�������ݿ������
	mysql_query("set names 'gbk'");//�����ַ���
	@mysql_select_db($database, $databaseConnection) or die(mysql_error());

}
function closeConnection(){
	global $databaseConnection;
	if($databaseConnection){
		mysql_close($databaseConnection) or die(mysql_error());
	}
}
?>
