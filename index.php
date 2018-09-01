<?php 
 
session_start();
if(!isset($_SESSION['cart'])){
	$_SESSION['cart']=['sum'=>0,'items'=>[]];	
}
require 'products.php';
$products = getProducts();
$errors = [];
if(!empty($_POST)){
	
	if(isset($_POST['product'])&&$_POST['product']!=0){
		$product = $_POST['product'];
	}else{
		$errors['product']='Выберите товар <br/>';
	}
	if(isset($_POST['count'])&&$_POST['count']!=0){
		$count = $_POST['count'];
	}else{
		$errors['count']= 'Ввведите количество товара';
	}
	
	if(empty($errors)){
		$id = $product;
		$product = $products[$id];
		if(isset($_SESSION['cart']['items'][$id])){
			$count +=  $_SESSION['cart']['items'][$id]['count'];
		}
		$_SESSION['cart']['items'][$id] = ['name'=>$product['name'],'count'=>$count];
	}
}
cartRecalc();
?>
<html>
<head>
    <meta charset="utf-8">

</head>

<body>
<pre>

<div style="color:green;">
К оплате <?php echo  $_SESSION['cart']['sum'];?>

<table>
<?php 
foreach($_SESSION['cart']['items'] as $key=>$item){
	echo '<tr><td>'.$key.'</td><td>'
	.$item['name'].'</td><td>'.$item['count']
	.'</td><td><a href=/delete.php?id='.$key.'>удалить</a></td></tr>';
}
?>
</table>
<form action="" method='POST'  enctype="multipart/form-data" >
<?php if(isset($errors['product'])) {
	echo $errors['product'];
}?>
<select name="product">
<option value='0' >Выберите товар</option>
	<option value='1' >кроссовки</option>
	<option value='2' >пальто</option>
	<option value='3' >носки</option>
</select>
<?php if(isset($errors['count'])) {
	echo $errors['count'].'<br/>';
}?>
Количество:
<input name="count" type='text' />
<input  type='submit' value="submit" />
</form>

</pre>
</body>
</html>