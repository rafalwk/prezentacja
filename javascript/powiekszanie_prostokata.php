<html>
<body>
<div id="square" style="background-color:black; width:100px; height:100px" onclick="olo()"></div>
<script>
var x = 5;
function olo(){
	var square = document.getElementById('square');
	square.style.border=x+'px solid black';
	x=x+5;
}
</script>
</body>
</html>