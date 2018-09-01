<?php 
 
session_start();
require 'products.php';

$id = $_GET['id'];


$product = $products[$id];
$cost =$product['cost'] ;
$count = $_SESSION['cart']['items'][$id]['count'];
 $_SESSION['cart']['sum'] =$_SESSION['cart']['sum']- (int)$count*(int)$cost;
 unset($_SESSION['cart']['items'][$id]);

header('Location: '.$_SERVER['HTTP_REFERER']);
