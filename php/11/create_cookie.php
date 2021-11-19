<?php
setcookie("myCookie", "Value of MyCookie"); 
setcookie("withExpire","expire in 1 hour",time()+60);//60Ãë=1·ÖÖÓ
setcookie("fullCookie","full cookie value",time()+60,"","",FALSE);
?>
