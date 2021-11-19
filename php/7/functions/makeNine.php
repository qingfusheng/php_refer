<?php
function makeNine(){
	echo "<table border='1'>";
	for ($c=1;$c<=9;$c++){
		echo "<tr>";
		for ($d=$c;$d<=9;$d++){
			echo "<td align='right'>";
			echo $c."¡Á".$d."=".$c*$d."&nbsp;&nbsp;&nbsp;";
			echo "</td>";
		}
		echo "</tr>";
		echo "<tr/><tr/>";
	}
	echo "</table>";
}
?>
