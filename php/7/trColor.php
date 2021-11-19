<?php
function trColor() {
	static $color;
	if($color=="#FE2E9A"){
		$color = "#E6E6E6";
	}else{
		$color = "#FE2E9A";
	}
	return($color);
}
?>
<table border=1>
<?php
for ($i=0;$i<10;$i++){
	$color = trColor();
	echo "<tr bgcolor='$color'><td>µÚ".$i."ÐÐ</td></tr>";
}
?>
</table>
