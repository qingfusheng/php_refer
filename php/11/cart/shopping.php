<?php 
session_start(); 
?> 
商品1 <a href="add_cart.php?product_id=1">添加到购物车</a><br/> 
商品2 <a href="add_cart.php?product_id=2">添加到购物车</a><br/> 
商品3 <a href="add_cart.php?product_id=3">添加到购物车</a><br/> 
商品4 <a href="add_cart.php?product_id=4">添加到购物车</a><br/> 
商品5 <a href="add_cart.php?product_id=5">添加到购物车</a><br/> 
商品6 <a href="add_cart.php?product_id=6">添加到购物车</a><br/> 
<hr> 
<?php 
if(empty($_SESSION["products"])){ 
     echo "您暂时没有购买商品。<br/>"; 
}else{ 
     echo "您所购买的商品有：<br/>"; 
     $products = $_SESSION["products"]; 
     foreach($products as $key=>$value){ 
     		echo "商品$value <a href='cancel.php?product_id=$key'>取消购买</a><br/>"; 
     } 
} 
?> 