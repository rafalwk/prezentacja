<?php
/*
Napisz klasę zawodnicy, która zachowuje się tak samo jak zwykła tablica, ale prezentuje dane z tabeli zawodnicy z bazy danych. W chwili sięgnięcia po konkretny indeks (na przykład 5) obiekt klasy zawodnicy powinien wyciągnąć z bazy tabelkę asocjacyjną z wszystkimi danymi zawodnika (czyli wiersz bazy danych, w którym wartość skoczek_id jest taka sama jak podany indeks).

Przerób klasę zawodnicy tak, by zwracała obiekt klasy zawodnik(*).
*/

function autoload(){
	include 'class_zawodnik.php';
}
spl_autoload_register('autoload');

class zawodnicy implements ArrayAccess{
	protected $zawodnik;
	function offsetGet($x){
		$connect = pg_connect("host='localhost' dbname='skoki_narciarskie' user='postgres' password='postgres'");
		$kwerenda = "select * from zawodnicy where id_zawodnika = $x";
		$wynik = pg_query($kwerenda);
		$tablica = pg_fetch_all($wynik);/*Używamy polecenia pg_fetch_all, które przyjmuje jako argument uchwyt uzyskany w poprzednim kroku, a zwraca wielką tablicę zwróconych przez bazę wierszy. Każdy z wierszy jest tablicą asocjacyjną, w której nazwy kolumn są kluczami, a zawartości pól - ich wartościami.*/
		foreach($tablica as $wiersz){
			$this->zawodnik->imie = $wiersz['imie'];
			$this->zawodnik->nazwisko = $wiersz['nazwisko'];
			$this->zawodnik->waga = $wiersz['waga'];
			$this->zawodnik->wzrost = $wiersz['wzrost'];
		}
	}
	function offsetSet($x,$y){}
	function offsetUnset($x){}
	function offsetExists($x){}
	function __construct(){
		$this->zawodnik = new zawodnik();
	}
	function obiekt(){
		return($this->zawodnik);
	}
}
$zawodnicy = new zawodnicy();
$zawodnicy[12];
var_dump($zawodnicy->obiekt());
?>