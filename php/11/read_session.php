<?php
session_start();
echo "读取Sessions信息";
echo "<br/>";
echo "用户名：";
if(isset($_SESSION["user_name"])){
	echo $_SESSION["user_name"];
}else{
	echo "暂无";
}
echo "<br/>";
echo "密 码 ：";
if(isset($_SESSION["password"])){
	echo $_SESSION["password"];
}else{
	echo "暂无";
}
echo "<br/>";
?>
<br/>
<a href="update_session.php">修改Session文件中的密码信息</a>
<br/>
<a href="delete_session.php">删除Session文件中的密码信息</a>
<br/>
<a href="delete_all_session.php">删除Session文件中的所有信息</a>
<br/>
<a href="destroy_session.php">销毁Session所有资源</a>
