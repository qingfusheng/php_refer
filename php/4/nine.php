<strong>PHP�žų˷���</strong>
<br/>
<table border="1">
<?php
for ($c=1;$c<=9;$c++){
	echo "<tr>";
	for ($d=$c;$d<=9;$d++){
		echo "<td align='right'>";
		echo $c."��".$d."=".$c*$d."&nbsp;&nbsp;&nbsp;";
		echo "</td>";
	}
	echo "</tr>";
	echo "<tr/><tr/>";
}
?>
</table>
