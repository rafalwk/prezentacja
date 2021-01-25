<html>
<script>
function zzz(){
	var x = Math.floor(Math.random() * 6) + 1;
	return x;
}
</script>
<body>
<img src="kostka.jpg" width="300px" onclick="this.src = 'kostka' + zzz() + '.jpg'"/>
</body>
</html>