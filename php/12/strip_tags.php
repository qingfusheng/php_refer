<?php
if(isset($_POST["name"])){
	$name = $_POST["name"];
	$name = strip_tags($name);
	$sql = "select * from users where name='$name'";
	echo $sql;
}
?>
<form method="post" action="">
�û�����<input type="text" name="name" value="<h1>admin</h1>">
<input type="submit" value="��ѯ">
</form>
