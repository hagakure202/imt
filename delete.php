<?php 
 
session_start();
require 'products.php';

$id = $_GET['id'];
unset($_SESSION['cart']['items'][$id]);
cartRecalc();

header('Location: '.$_SERVER['HTTP_REFERER']);
