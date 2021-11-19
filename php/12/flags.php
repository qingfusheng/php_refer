<?php
$str = "Tom\"s & O'Neil ";
echo htmlspecialchars($str, ENT_COMPAT);
echo "<br/>";
echo htmlspecialchars($str, ENT_QUOTES);
echo "<br/>";
echo htmlspecialchars($str, ENT_NOQUOTES);
?> 