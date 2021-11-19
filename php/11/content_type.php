<?php 
if(isset($_POST["contentType"])){ 
     $contentType = $_POST["contentType"]; 
     if($contentType=="html"){ 
     		header("content-type:text/html"); 
		header("Content-Disposition: attachment;filename=downloaded.html"); 
     }else if($contentType=="xml"){ 
     		header("content-type:text/xml;charset=gbk"); 
     		echo "<?xml version='1.0' encoding='gbk'?>"; 
		header("Content-Disposition: attachment;filename=downloaded.xml"); 
     }else if($contentType=="text"){ 
     		header("content-type:text/plain"); 
		header("Content-Disposition: attachment;filename=downloaded.txt"); 
     } 
} 
?> 
<form action="content_type.php" method="post"> 
<select name="contentType"> 
<option value="html">html</option> 
<option value="xml">xml</option> 
<option value="text">text</option> 
text/plain 
</select> 
<input type="submit" value="测试"/> 
</form> 