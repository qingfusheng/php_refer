<form action="request.php?action=insert" method="post">
<input type="submit" name="action" value="Ìí¼Ó">
</form>
<?php
if(isset($_GET['action'])){
	echo $_GET['action'];
	echo "<br/>";
}
if(isset($_POST['action'])){
	echo $_POST['action'];
	echo "<br/>";
}
if(isset($_REQUEST['action'])){
	echo $_REQUEST['action'];
	echo "<br/>";
}
?>
