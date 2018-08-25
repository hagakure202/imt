<html>
<head></head>

<body>

<div style="color:green;">
<pre>
<?php
//Сгенерировать массив из 25 чисел, вывести на экран и найти минимальное, максимальное и сумму.

//сгенерить случайно 2 массива чисел. вывести совпадающие значения(те которые есть в обоих массивах) 
//и те которых есть только во втором


function sum(){

	$args = func_get_args();
	$sum =0;
		foreach ($args as  $value) {
			$sum+=$value;
		}
	return $sum;
}
echo sum(null,22,44,'-0',0x655,33,22);

?>


</pre>
</body>
</html>