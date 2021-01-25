Napisz stronę zawierającą formularz. Niech formularz ma pola: imię, nazwisko, pesel, pesel ojca, kod pocztowy. Przed wysłaniem formularza, niech kod w javascripcie sprawdzi, czy wpisane dane są poprawne. Jeśli dane są niepoprawne, niech alert poinformuje użytkownika o problemie i nie wysyła formularza.<hr>

<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<script>
	function walidacja(){
		var imie = document.getElementById('imie').value;
		var nazwisko = document.getElementById('nazwisko').value;
		var pesel = document.getElementById('pesel').value;
		var peselojca = document.getElementById('peselojca').value;
		var kodpocztowy = document.getElementById('kodpocztowy').value;
		if(imie.match(/^[a-zA-Z]+$/) && nazwisko.match(/^[a-zA-Z]+$/) && pesel.match(/^\d{11}$/) && peselojca.match(/^\d{11}$/) && pesel != peselojca && kodpocztowy.match(/^\d\d-\d\d\d$/)){
			return true;
		}else{
			alert('Wprowadź poprawne dane!');
			return false;
		}
	}
</script>
</head>
<body>
	<form action="" id="form" onsubmit="return walidacja();">
		Imię:<br/><input type="text" name="imie" id="imie" value="Janusz"><br/>
		Nazwisko:<br/><input type="text" name="nazwisko" id="nazwisko" value="Kowalski"><br/>
		Pesel:<br/><input type="text" name="pesel" id="pesel" value="90328736489"><br/>
		Pesel ojca:<br/><input type="text" name="peselojca" id="peselojca" value="92374839202"><br/>
		Kod pocztowy:<br/><input type="text" name="kodpocztowy" id="kodpocztowy" value="00-333"><br/>
		<input type="submit" value="Wyślij">
	</form>
</body>
</html>
<!-- 
1. Metoda onsubmit elementu form powinna sprawdzać, czy dane podane w formularzu są poprawne.
-->