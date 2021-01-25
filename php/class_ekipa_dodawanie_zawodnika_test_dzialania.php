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
		return(parent::czy_moze_startowac() and $this->czy_posiada_zgode_rodzicow);
	}
}
class zawodnik_emerytowany extends zawodnik{
	public $wiek;
	function czy_moze_startowac(){
		if($this->wiek > 70){
			return(parent::czy_moze_startowac() and $this->waga >= 50);
		}else{
			return(parent::czy_moze_startowac());
		}
	}
}
class ekipa{
	protected $zawodnicy = array();
	
	function dodaj_zawodnika($zawodnik){
		if($zawodnik instanceof zawodnik){
			$this->zawodnicy[] = $zawodnik;
		}else{
			print("To nie jest zawodnik! ");
		}
	}
	
	function kto_moze_startowac(){
		foreach($this->zawodnicy as $zawodnik){
			print "Zawodnik {$zawodnik->imie} {$zawodnik->nazwisko} ";
			if($zawodnik->czy_moze_startowac()){
				print("Może startować. ");
			}else{
				print("Nie może startować. ");
			}
		}
	}
}
$zawodnik = new zawodnik();
$zawodnik->imie = "Jacek";
$zawodnik->nazwisko = "Kowalski";
$zawodnik->waga = 82;
$zawodnik->wzrost = 1.90;

$zawodnik_nieletni = new zawodnik_nieletni();
$zawodnik_nieletni->imie = "Marcin";
$zawodnik_nieletni->nazwisko = "Głowacki";
$zawodnik_nieletni->waga = 63;
$zawodnik_nieletni->wzrost = 1.67;
$zawodnik_nieletni->czy_posiada_zgode_rodzicow = false;

$zawodnik_emerytowany = new zawodnik_emerytowany();
$zawodnik_emerytowany->imie = "Zbigniew";
$zawodnik_emerytowany->nazwisko = "Mroczkowski";
$zawodnik_emerytowany->waga = 64;
$zawodnik_emerytowany->wzrost = 1.60;
$zawodnik_emerytowany->wiek = 71;

$ekipa = new ekipa();
$ekipa->dodaj_zawodnika($zawodnik);
$ekipa->dodaj_zawodnika($zawodnik_nieletni);
$ekipa->dodaj_zawodnika($zawodnik_emerytowany);
$ekipa->kto_moze_startowac();
?>