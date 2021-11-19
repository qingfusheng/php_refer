<?php
class A{
}
class B{
}

$a = new A();

var_dump($a instanceof A);//Êä³ö£ºbool(true)
echo "<br/>";
var_dump($a instanceof B);//Êä³ö£ºbool(false)
?>
