<?php 
session_start(); 
?> 
��Ʒ1 <a href="add_cart.php?product_id=1">��ӵ����ﳵ</a><br/> 
��Ʒ2 <a href="add_cart.php?product_id=2">��ӵ����ﳵ</a><br/> 
��Ʒ3 <a href="add_cart.php?product_id=3">��ӵ����ﳵ</a><br/> 
��Ʒ4 <a href="add_cart.php?product_id=4">��ӵ����ﳵ</a><br/> 
��Ʒ5 <a href="add_cart.php?product_id=5">��ӵ����ﳵ</a><br/> 
��Ʒ6 <a href="add_cart.php?product_id=6">��ӵ����ﳵ</a><br/> 
<hr> 
<?php 
if(empty($_SESSION["products"])){ 
     echo "����ʱû�й�����Ʒ��<br/>"; 
}else{ 
     echo "�����������Ʒ�У�<br/>"; 
     $products = $_SESSION["products"]; 
     foreach($products as $key=>$value){ 
     		echo "��Ʒ$value <a href='cancel.php?product_id=$key'>ȡ������</a><br/>"; 
     } 
} 
?> 