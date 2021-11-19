<?php
print $age;//显示变量未定义的notice信息
echo "<br/>";
@print $age;//@将屏蔽$age变量没有定义的notice信息
?>
