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
?>