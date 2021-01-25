<?php
function silnia($liczba){
	$wartosc_silni = 1;
	$licznik = 1;
	while($licznik < $liczba){
		$wartosc_silni = $wartosc_silni * ($licznik + 1);
		$licznik++;
	}
	print($wartosc_silni);
}
silnia(4);
?>