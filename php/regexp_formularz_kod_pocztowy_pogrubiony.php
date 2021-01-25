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
	echo "Wpisz coś!";
}else{
	$napis = $_GET['napis'];
	print(preg_replace('/([0-9][0-9]-[0-9][0-9][0-9])/', '<b>$1</b>', $napis));
}
?>