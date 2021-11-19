<?php
$teacher = 'teacher';
for($index=0;$index<7;$index++){
	$char = $teacher[$index];
	echo $char;
}
echo "<br/>";
for($index=0;$index<7;$index++){
	$char = $teacher{$index};
	echo $char;
}
?>
