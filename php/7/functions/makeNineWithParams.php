<?php
function makeNineWithParams($method, $border=1){
	echo "<table border='$border'>";
	for ($c=1;$c<=9;$c++){
		echo "<tr>";
		for ($d=$c;$d<=9;$d++){
			echo "<td align='right'>";
			if($method==="+"){
				echo $c."+".$d."=".($c+$d)."&nbsp;&nbsp;&nbsp;";
			}else if($method==="*"){
				echo $c."¡Á".$d."=".($c*$d)."&nbsp;&nbsp;&nbsp;";
			}
			echo "</td>";
		}
		echo "</tr>";
		echo "<tr/><tr/>";
	}
	echo "</table>";
}
?>
