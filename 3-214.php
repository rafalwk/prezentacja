<html>
<body>
<input type="button" value="napisz kura" onclick="ramka.innerHTML+='kura'" onmouseover="ramka.innerHTML=''"/>
<input type="button" value="napisz kogut" onclick="ramka.innerHTML+='kogut'" onmouseover="ramka.innerHTML=''"/>
<div id="ramka"></div>
<script>
var ramka = document.getElementById('ramka');
</script>
</body>
</html>