<?php
class Person{
	public $name = "����";
	public $sex = "��";
	public $age = 20;
	function say(){
		echo "�������˵��";
	}
	function walk(){
		echo "���������·";
	}
}
$person = new Person();
print_r($person);
echo "<br/>";
$words = array("browser","application","database");
print_r($words);
?>
