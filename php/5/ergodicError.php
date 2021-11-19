<?php 
$temp = range('a','z'); 
$temp[4] = 0; 
print_r($temp); 
echo "<br/>"; 
reset($temp); 
do{ 
     $key = key($temp); 
     $value = current($temp); 
     echo $key."&nbsp;==>&nbsp;".$value."<br/>"; 
}while(next($temp)); 
?> 