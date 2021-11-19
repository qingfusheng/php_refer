<?php
$name = "";
if(isset($_POST["name"])){
	$name = addslashes($_POST["name"]);
	$sql = "select * from users where name='$name'";
	echo $sql;
	$name = $_POST["name"];
}
?>
<form method="post" action="">
用户名：<input type="text" name="name" value="<?php echo $name;?>">
<input type="submit" value="查询">
</form>
