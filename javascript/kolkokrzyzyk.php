<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
		var x = 'kolko.jpg';
		function podmiana(){
			if(x == 'kolko.jpg'){
				x = 'krzyzyk.jpg';
				return x;
			}
			if(x == 'krzyzyk.jpg'){
				x = 'kolko.jpg';
				return x;
			}
		}
	</script>
</head>
<body>
	<table width="450px" height="450px" border="2px solid black" id="tabela">
		<tr>
			<td width="150px" height="150px" onclick="this.firstElementChild.src=podmiana();"><img src="" alt=""></td>
			<td width="150px" height="150px" onclick="this.firstElementChild.src=podmiana();"><img src="" alt=""></td>
			<td width="150px" height="150px" onclick="this.firstElementChild.src=podmiana();"><img src="" alt=""></td>
		</tr>
		<tr>
			<td width="150px" height="150px" onclick="this.firstElementChild.src=podmiana();"><img src="" alt=""></td>
			<td width="150px" height="150px" onclick="this.firstElementChild.src=podmiana();"><img src="" alt=""></td>
			<td width="150px" height="150px" onclick="this.firstElementChild.src=podmiana();"><img src="" alt=""></td>
		</tr>
		<tr>
			<td width="150px" height="150px" onclick="this.firstElementChild.src=podmiana();"><img src="" alt=""></td>
			<td width="150px" height="150px" onclick="this.firstElementChild.src=podmiana();"><img src="" alt=""></td>
			<td width="150px" height="150px" onclick="this.firstElementChild.src=podmiana();"><img src="" alt=""></td>
		</tr>
	</table>
</body>
</html>