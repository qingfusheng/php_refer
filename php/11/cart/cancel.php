<?php 
session_start(); 
$product_id = $_GET["product_id"]; 
unset($_SESSION["products"][$product_id]); 
header("Location:shopping.php"); 
?> 