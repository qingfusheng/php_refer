<?php
$string = "This is\tan example\nstring";
$tok = strtok($string, "\n \t");//ʹ�á�\n��ո��\t���ָ�$string
while($tok){
    echo "Word=$tok<br/>";
    $tok = strtok("\n \t");//��Ȼû��ָ��$string����������ʹ�á�\n��ո��\t���ָ�$string
}
?>
