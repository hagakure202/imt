<?php 
function getProducts(){
 return [
	1=>[
		'name'=>'кроссовки',
		'cost'=>1000,
	],
	2=>[
		'name'=>'пальто',
		'cost'=>2500,
	],
	3=>[
		'name'=>'носки',
		'cost'=>100,
	],
];
}

function cartRecalc() {
	$products = getProducts();
	$items = $_SESSION['cart']['items'];
	$sum = 0; 
	foreach($items as $key=>$item){
		$sum +=$products[$key]['cost']*$item['count'];
	}
	
	if($sum>10000){
		$sum *= 0.91;
	}
	$_SESSION['cart']['sum']=$sum;
}
?>