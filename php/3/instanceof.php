<?php
class A{
}
class B{
}

$a = new A();

var_dump($a instanceof A);//�����bool(true)
echo "<br/>";
var_dump($a instanceof B);//�����bool(false)
?>
