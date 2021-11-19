<?php
$old_string = <<<nl2br
I
am
a
t\nea\rcher
!
nl2br;
$new_string = nl2br($old_string);
echo $old_string;
echo "<br/>";
echo $new_string;
?>