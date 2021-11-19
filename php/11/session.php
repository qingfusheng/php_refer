<?php
if(isset($_GET['PHPSESSID'])){
	session_id($_GET['PHPSESSID']);
}
session_start();
echo session_id();
echo "<br/>";
echo session_name();
echo "<br/>";
echo SID;//产生的SID格式为：Session name=Session ID
?>
<br/>
<a href="session.php?<?php echo SID?>">刷新</a>
