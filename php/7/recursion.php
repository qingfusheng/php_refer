<?php 
function recursion() { 
     static $count = 0; 
     $count++; 
     echo $count."&nbsp;&nbsp;"; 
     if ($count < 3) { 
          recursion(); 
     } 
     echo  $count."&nbsp;&nbsp;"; 
     $count--; 
} 
recursion(); 
?> 
