<?php 
session_start(); 
$product_id = $_GET["product_id"]; 
$products = $_SESSION["products"]; 
$products[$product_id] = $product_id; 
$_SESSION["products"] = $products; 
header("Location:shopping.php"); 
?> 