<?php 
$name = ""; 
if(isset($_POST["name"])){ 
     $name = $_POST["name"];
     echo "����FORM����������û����ǣ�";
     echo $name;
     echo "<br/>";
     echo "�����SQL���ǰ���û�����Ҫʹ��addslashes()����ת�塣";
     echo "�û���ת����ǣ�";
     $name = addslashes($name);
     echo $name;
     echo "<br/>";
     echo "�û���ת��󣬹����SQL����Ǹ�ʽ��ȷ��SQL��䣺";
     $sql = "select * from users where name='$name'"; 
     echo $sql;
     echo "<br/>";
     echo "�û���ת�����Ҫʹ��stripslashes()�����ָ�ԭ״��";
     echo "�û����ָ�ԭ״���ǣ�";
     $name = stripslashes($name);
     echo $name;
     echo "<br/>";
} 
?> 
<form method="post" action=""> 
�û�����<input type="text" name="name" value="<?php echo $name;?>"> 
<input type="submit" value="��ѯ"> 
</form> 