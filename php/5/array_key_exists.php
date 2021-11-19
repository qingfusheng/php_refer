<?php
$words = array("SUN"=>"JAVA","Microsoft"=>".NET");
$keyExisted1 = array_key_exists("SUN",$words);
$keyExisted2 = array_key_exists("sun",$words);
var_dump($keyExisted1);//Êä³ö£ºbool(true) 
echo "<br/>";
var_dump($keyExisted2);//Êä³ö£ºbool(false) 
?>