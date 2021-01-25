<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="get">
		<input type="text" name="napis">
		<input type="submit" value="Wyślij">
	</form>
</body>
</html>
<?php
if($_GET == null or $_GET['napis'] == null){
	echo 'Wpisz coś!';
}else{
	$napis = $_GET['napis'];
	$array = preg_split('/(\s)|(,\s)/', $napis);
	//var_dump($array);
	$arraycount = array_count_values($array);
	//var_dump($arraycount);
	foreach($arraycount as $line){
		if($line>1){
			echo "Powtarza się!";
		}
	}
}
?>