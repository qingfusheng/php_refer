<?php
switch (date("D")) {
	case "Mon":
		echo "今天星期一<br/>";
	case "Tue":
		echo "今天星期二<br/>";
	case "Wed":
		echo "今天星期三<br/>";
	case "Thu":
		echo "今天星期四<br/>";
	case "Fri":
		echo "今天星期五<br/>";
	default:
		echo "今天放假<br/>";
}
?>
