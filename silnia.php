<?php
function silnia($z){
	$a = 1;
	$b = 1;
	while($a < $z){
		$a++;
		$b = $b * $a;
	}
	print($b);
}
silnia(5);
?>