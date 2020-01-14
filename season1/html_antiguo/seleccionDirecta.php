<?php 
/*esta aplicacion desarrollara una funcion de ordenacion 
de arrays utilizando el método de la seleccion directa: 
 Selección directa: selecciona el elemento más pequeño de
todo el array y se intercambia con el primer elemento. Se
busca el siguiente más pequeño y se intercambia por el
segundo y así sucesivamente hasta que quede sólo un
elemento y por lo tanto la lista esté ordenada .*/


$miarray= array('0' =>49 ,'1'=>24,'2'=>36,'3'=> 80,'4'=>31 );

var_dump($miarray);

//Esta variable contendra el valor de la celda mas pequeña
$peque = $miarray[0];
//Esta variable es para almacenar la posicion
$pos_insert = 0;
$pos_min = 0;


while ($pos_insert <= (sizeof($miarray)-2)) {
	$min = $miarray[$pos_insert];
	$min_encontrado = false; 
	for ($i = $pos_insert + 1; $i < (sizeof($miarray)) ; $i++) { 
		if ($miarray[$i] < $min) {
			$min_encontrado = true;
			$min =$miarray[$i];
			$pos_min = $i;
		}	
		
	}
	$aux = $min;
	//$miarray[$pos_insert] = $min;
	if ($min_encontrado == true) {
		$aux = $min; 
		$miarray[$pos_min] = $miarray[$pos_insert];
		$miarray[$pos_insert] = $aux ; 

	}


	$pos_insert++;
}
var_dump($miarray);



 ?>