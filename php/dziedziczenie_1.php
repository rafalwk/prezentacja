<?php
class zawodnik{
	public $imie;
	public $nazwisko;
	public $waga;
	public $wzrost;
	function opisz(){
		print('Zawodnik ' . $this->imie . ' ' . $this->nazwisko);
	}
	function oblicz_bmi(){
		return($this->waga/($this->wzrost * $this->wzrost));
	}
	function czy_moze_startowac(){
		return($this->oblicz_bmi() >= 20);
	}
}
class zawodnik_nieletni extends zawodnik{
	public $czy_posiada_zgode_rodzicow;
	function czy_moze_startowac(){
		$bmi = $this->oblicz_bmi();
		return($bmi >= 20 and $this->czy_posiada_zgode_rodzicow);
	}
}
$zawodnik = new zawodnik_nieletni();
$zawodnik->wzrost = 1.25;
$zawodnik->waga = 55;
if($zawodnik->czy_moze_startowac()){
	print('Może startować. ');
}else{
	print('Nie może startować. ');
}
$zawodnik->czy_posiada_zgode_rodzicow = true;
if($zawodnik->czy_moze_startowac()){
	print('Może startować. ');
}else{
	print('Nie może startować. ');
}
?>