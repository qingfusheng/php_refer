<?php
class Student{
	//下面是Student类的成员变量
	public $name;
	public $sex;
	public $birthday;
	//下面是Student类的成员方法
	function getName(){
	//this是指向当前对象
		return $this->name;
	}
	function setName($name){
		$this->name = $name;
	}
}
$student = new Student();
$student->setName("张三");
echo $student->getName();
?>
