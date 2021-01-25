<?php
class zwierze{
	public $imie;
	function __construct($imie){
		$this->imie = $imie;
	}
	function wydaj_dzwiek(){}
	function przedstaw_sie(){
		print('Jestem ' . $this->imie);
	}
	
}

class towar{
	public $nazwa;
	public $cena;
	function docennika(){}
}

class swinka_morska{
	function wydaj_dzwiek(){
		print('pipipipi');
	}
}

interface Izwierze{
	function wydaj_dzwiek();
}

class swinka_morska_towar extends towar implements Izwierze{
	public $moja_swinka;
	function __construct(){
		$this->moja_swinka = new swinka_morska();
	}
	function wydaj_dzwiek(){}
}
$swinka_morska_towar = new swinka_morska_towar();
$swinka_morska_towar->moja_swinka->wydaj_dzwiek();
?>