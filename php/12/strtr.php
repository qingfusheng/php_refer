<?php
$replacements = array("<b>"=>"<strong><i>","</b>"=>"</strong></i>");
$html = "<b>I'm a teacher.</b>";
$new_html = strtr($html,$replacements);
echo $new_html;
?>
