<?php
$serverLink1 = mysql_connect("localhost","root","");
echo $serverLink1;//�����Resource id #2
echo "<br/>";
$serverLink2 = mysql_connect("localhost","root","");
echo $serverLink2;//�����Resource id #2
?>
