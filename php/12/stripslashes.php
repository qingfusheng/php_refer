<?php 
$name = ""; 
if(isset($_POST["name"])){ 
     $name = $_POST["name"];
     echo "你在FORM表单中输入的用户名是：";
     echo $name;
     echo "<br/>";
     echo "构造的SQL语句前，用户名需要使用addslashes()函数转义。";
     echo "用户名转义后是：";
     $name = addslashes($name);
     echo $name;
     echo "<br/>";
     echo "用户名转义后，构造的SQL语句是格式正确的SQL语句：";
     $sql = "select * from users where name='$name'"; 
     echo $sql;
     echo "<br/>";
     echo "用户名转义后，需要使用stripslashes()函数恢复原状，";
     echo "用户名恢复原状后是：";
     $name = stripslashes($name);
     echo $name;
     echo "<br/>";
} 
?> 
<form method="post" action=""> 
用户名：<input type="text" name="name" value="<?php echo $name;?>"> 
<input type="submit" value="查询"> 
</form> 