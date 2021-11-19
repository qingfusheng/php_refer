<?php
class Person{
	public $name = "张三";
	public $sex = "男";
	public $age = 20;
	function say(){
		echo "这个人在说话";
	}
	function walk(){
		echo "这个人在走路";
	}
}
$person = new Person();
print_r($person);
echo "<br/>";
$words = array("browser","application","database");
print_r($words);
?>
