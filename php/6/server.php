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
echo "浏览器IP地址：".$clientIP."<br/>"; 
echo "WEB服务器IP地址：".$serverIP."<br/>"; 
echo "当前程序相对路径：".$self."<br/>";
echo "WEB服务器名：".$serverName."<br/>"; 
echo "WEB服务器端口号：".$serverPort."<br/>"; 
echo "WEB服务器名：".$httpHost."<br/>";  
echo "查询字符串：".$queryString."<br/>"; 
echo "WEB服务器根目录：".$documentRoot."<br/>"; 
echo "请求URI：".$requestURI."<br/>"; 
?> 