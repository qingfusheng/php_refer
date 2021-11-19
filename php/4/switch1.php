<?php
switch (date("D")) {
	case "Mon":
		echo "今天星期一<br/>";
		break;
	case "Tue":
		echo "今天星期二<br/>";
		break;
	case "Wed":
		echo "今天星期三<br/>";
		break;
	case "Thu":
		echo "今天星期四<br/>";
		break;
	case "Fri":
		echo "今天星期五<br/>";
		break;
	default:
		echo "今天放假<br/>";
}
?>
