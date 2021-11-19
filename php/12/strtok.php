<?php
$string = "This is\tan example\nstring";
$tok = strtok($string, "\n \t");//使用“\n或空格或\t”分割$string
while($tok){
    echo "Word=$tok<br/>";
    $tok = strtok("\n \t");//虽然没有指定$string参数，继续使用“\n或空格或\t”分割$string
}
?>
