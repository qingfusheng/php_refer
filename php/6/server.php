<?php 
$clientIP = $_SERVER['REMOTE_ADDR']; 
$serverIP = $_SERVER['SERVER_ADDR']; 
$self = $_SERVER['PHP_SELF']; 
$serverName = $_SERVER['SERVER_NAME']; 
$serverPort = $_SERVER['SERVER_PORT']; 
$httpHost = $_SERVER['HTTP_HOST']; 
$queryString = $_SERVER['QUERY_STRING']; 
$documentRoot = $_SERVER['DOCUMENT_ROOT']; 
$requestURI = $_SERVER["REQUEST_URI"]; 
echo "�����IP��ַ��".$clientIP."<br/>"; 
echo "WEB������IP��ַ��".$serverIP."<br/>"; 
echo "��ǰ�������·����".$self."<br/>";
echo "WEB����������".$serverName."<br/>"; 
echo "WEB�������˿ںţ�".$serverPort."<br/>"; 
echo "WEB����������".$httpHost."<br/>";  
echo "��ѯ�ַ�����".$queryString."<br/>"; 
echo "WEB��������Ŀ¼��".$documentRoot."<br/>"; 
echo "����URI��".$requestURI."<br/>"; 
?> 