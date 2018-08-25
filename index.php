<html>
<head></head>

<body>
<?php 
if(!empty($_POST['name'])&& !empty($_POST['surname'])){
	$name = addcslashes($_POST['name'],'"');
	$surname = $_POST['surname']; 
	
	echo 'Hello '.$name.' '.$surname.'!';
} 
?>
<div style="color:green;">
<form action="" method='POST'>
<input name="name" type='text' /><br/>
<input name="surname" type='text' />
<input  type='submit' value="submit" />
</form>

</pre>
</body>
</html>