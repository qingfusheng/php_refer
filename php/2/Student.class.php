<?php
class Student{
	//������Student��ĳ�Ա����
	public $name;
	public $sex;
	public $birthday;
	//������Student��ĳ�Ա����
	function getName(){
	//this��ָ��ǰ����
		return $this->name;
	}
	function setName($name){
		$this->name = $name;
	}
}
$student = new Student();
$student->setName("����");
echo $student->getName();
?>
