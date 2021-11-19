<?php
class Student{
}
$bool = TRUE;
$string = "ÄãºÃ";
$int = 100;
$float = 100.00;
$numeric = "01234.56789";
$array = array(1,3,5);
$object = new Student();
$resource = mysql_connect("localhost","root","");

var_dump(is_bool($bool));
echo "<br/>";
var_dump(is_string($string));
echo "<br/>";
var_dump(is_int($int));
echo "<br/>";
var_dump(is_float($float));
echo "<br/>";
var_dump(is_numeric($numeric));
echo "<br/>";
var_dump(is_array($array));
echo "<br/>";
var_dump(is_object($object));
echo "<br/>";
var_dump(is_resource($resource));
?>
