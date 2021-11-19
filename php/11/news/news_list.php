<?php 
include_once("functions/database.php"); 
include_once("functions/page.php"); 
include_once("functions/is_login.php"); 
session_start(); 
//显示文件上传的状态信息 
if(isset($_GET["message"])){ 
     echo $_GET["message"]."<br/>"; 
} 
//构造查询所有新闻的SQL语句 
$search_sql = "select * from news order by news_id desc"; 
//若进行模糊查询，取得模糊查询的关键字keyword 
$keyword = ""; 
if(isset($_GET["keyword"])){ 
     $keyword = $_GET["keyword"]; 
     //构造模糊查询新闻的SQL语句 
     $search_sql = "select * from news where title like '%$keyword%' or content like '%$keyword%' order by news_id desc"; 
} 
//提供进行模糊查询的form表单 
?> 
<form action="news_list.php" method="get"> 
请输入关键字：<input type="text" name="keyword" value="<?php echo $keyword?>"> 
<input type="submit" value="搜索"> 
</form> 
<br/> 
<table> 
<?php 
get_connection(); 
//分页的实现 
$result_news = mysql_query($search_sql); 
$total_records = mysql_num_rows($result_news); 
$page_size = 3; 
if(isset($_GET["page_current"])){ 
     $page_current = $_GET["page_current"]; 
}else{ 
     $page_current=1; 
} 
$start = ($page_current-1)*$page_size; 
$search_sql = "select * from news order by news_id desc limit $start,$page_size"; 
if(isset($_GET["keyword"])){ 
     $keyword = $_GET["keyword"]; 
     //构造模糊查询新闻的SQL语句 
     $search_sql = "select * from news where title like '%$keyword%' or content like '%$keyword%' order by news_id desc limit $start,$page_size"; 
} 
$result_set = mysql_query($search_sql); 
close_connection(); 
if(mysql_num_rows($result_set)==0){ 
     exit("暂无记录！"); 
} 
while($row = mysql_fetch_array($result_set)){ 
?> 
<tr> 
<td> 
     	<a href="news_detail.php?news_id=<?php echo $row['news_id']?>"><?php echo $row ['title']?></a> 
</td> 
<?php 
if(is_login()){ 
?> 
<td> 
     <a href="news_edit.php?news_id=<?php echo $row['news_id']?>">编辑</a> 
</td> 
<td> 
     <a href="news_delete.php?news_id=<?php echo $row['news_id']?>">删除</a> 
</td> 
<?php 
} 
?> 
</tr> 
<?php 
} 
?> 
</table> 
<?php 
//打印分页导航条
$url = $_SERVER["PHP_SELF"]; 
page($total_records,$page_size,$page_current,$url,$keyword); 
?> 