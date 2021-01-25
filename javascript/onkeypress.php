<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" name="tekst" onkeypress="i++; a.innerHTML=i">
	<div id="licznik"></div>
	<script>
		var i = 0;
		var a = document.getElementById('licznik');
	</script>
</body>
</html>