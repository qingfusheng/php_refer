<?php
setcookie("myCookie", "Value of MyCookie"); 
setcookie("withExpire","expire in 1 hour",time()+60);//60��=1����
setcookie("fullCookie","full cookie value",time()+60,"","",FALSE);
?>
