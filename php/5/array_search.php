<?php
$words = array(".NET"=>"Microsoft","JAVA"=>"SUN","JSP"=>"SUN");
$searchKey1 = array_search("SUN",$words);
var_dump($searchKey1);//�����string(4) "JAVA" 
echo "<br/>";
$searchKey2 = array_search("microsoft",$words);
var_dump($searchKey2);//�����bool(false) 
echo "<br/>";

$numbers = array("PI"=>"3.14","ֱ��"=>"90");
$searchKey3 = array_search(90,$numbers);
$searchKey4 = array_search(90,$numbers,TRUE);
var_dump($searchKey3);//�����string(4) "ֱ��" 
echo "<br/>";
var_dump($searchKey4);//�����bool(false) 
?>