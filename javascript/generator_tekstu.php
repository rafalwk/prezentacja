<html>
<body>
<input type="button" value="Wyświetl tekst" onclick="tt()"/>
<div id="ramka"></div>
<script>
var ramka = document.getElementById('ramka');
var x = 1;
function tt(){
	ramka.innerHTML = document.getElementById(x).innerHTML;
	if(x<8){
		x++;
	}
}
</script>
<table hidden style="border: 2px solid black">
	<tr>
		<td id="1">Wpłynąłem na suchego przestwór oceanu,</td>
		<td id="2">Wóz nurza się w zieloność i jak łódka brodzi,</td>
		<td id="3">Śród fali łąk szumiących, śród kwiatów powodzi,</td>
		<td id="4">Omijam koralowe ostrowy burzanu</td>
	</tr>
	<tr>
		<td id="5">Już mrok zapada, nigdzie drogi ni kurhanu;</td>
		<td id="6">Patrzę w niebo, gwiazd szukam przewodniczek łodzi;</td>
		<td id="7">Tam z dala błyszczy obłok? tam jutrzenka wschodzi?</td>
		<td id="8">To błyszczy Dniestr, to weszła lampa Akermanu.</td>
	</tr>
</table>
</body>
</html>