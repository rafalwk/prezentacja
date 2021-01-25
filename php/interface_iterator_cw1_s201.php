<?php
/*
Napisz klasę zawodnicy, która zachowuje się tak samo jak zwykła tablica, ale prezentuje dane z tabeli zawodnicy z bazy danych. W chwili sięgnięcia po konkretny indeks (na przykład 5) obiekt klasy zawodnicy powinien wyciągnąć z bazy tabelkę asocjacyjną z wszystkimi danymi zawodnika (czyli wiersz bazy danych, w którym wartość skoczek_id jest taka sama jak podany indeks).

Przerób klasę zawodnicy tak, by zwracała obiekt klasy zawodnik.

Uzupełnij napisaną ostatnio klasę, dającą dostęp do pojedyńczych wierszy tabeli zawodnicy, o możliwość iteracji po całej tabeli za pomocą konstrukcji foreach.
*/


function autoload(){
	include 'class_zawodnik.php';
}
spl_autoload_register('autoload');

class zawodnicy extends zawodnik implements ArrayAccess, Iterator{
	private $position = 0;
	protected $tablica = array();
	function __construct(){
		$this->position = 0;
		$connect = pg_connect("host='localhost' dbname='skoki_narciarskie' user='postgres' password='postgres'");
		$kwerenda = "select * from zawodnicy";
		$wynik = pg_query($kwerenda);
		$tablica = pg_fetch_all($wynik);
		$this->tablica = $tablica;
		/*foreach($tablica as $wiersz){
			$this->tablica[] = $wiersz;
		}*/
	}
	function offsetGet($x){
		$connect = pg_connect("host='localhost' dbname='skoki_narciarskie' user='postgres' password='postgres'");
		$kwerenda = "select * from zawodnicy where id_zawodnika = $x";
		$wynik = pg_query($kwerenda);
		$tablica = pg_fetch_all($wynik);/*Używamy polecenia pg_fetch_all, które przyjmuje jako argument uchwyt uzyskany w poprzednim kroku, a zwraca wielką tablicę zwróconych przez bazę wierszy. Każdy z wierszy jest tablicą asocjacyjną, w której nazwy kolumn są kluczami, a zawartości pól - ich wartościami.*/
		foreach($tablica as $wiersz){
			$this->imie = $wiersz['imie'];
			$this->nazwisko = $wiersz['nazwisko'];
			$this->waga = $wiersz['waga'];
			$this->wzrost = $wiersz['wzrost'];
		}
	}
	function offsetSet($x,$y){}
	function offsetUnset($x){}
	function offsetExists($x){}
	function oblicz_bmi(){
		return($this->waga/(($this->wzrost/100) * ($this->wzrost/100)));
	}
	function rewind(){
		$this->position = 0;
	}//przesuwa licznik na pierwszy element
	function current(){
		return $this->tablica[$this->position];
	}//zwraca wartość, na którą aktualnie wskazuje licznik
	function key(){
		return $this->position;
	}//zwraca wartość klucza związanego z aktualnym licznikiem
	function next(){
		++$this->position;
	}//przesuwa klucz o jeden element do przodu
	function valid(){
		return isset($this->tablica[$this->position]);
	}//sprawdza, czy licznik aktualnie wskazuje na jakąś wartość, czy też iteracja powinna się już zakończyć
}
$zawodnicy = new zawodnicy();
foreach($zawodnicy as $wiersz){
	var_dump($wiersz);
	//echo $wiersz['imie'].' ';
	//echo $wiersz['nazwisko'].' ';
	//echo $wiersz['waga'].' ';
	//echo $wiersz['wzrost'].' ';
	echo '<hr>';
	
}
?>