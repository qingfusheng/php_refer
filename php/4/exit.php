<?php
@($a = 2/0) or exit("发生被零除错误！");
echo "exit后面的语句将不会运行！";
?>
