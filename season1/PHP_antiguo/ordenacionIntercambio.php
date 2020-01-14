<?php

$miarray= array('0' =>49 ,'1'=>24,'2'=>36,'3'=> 80,'4'=>31 );


//Esta variable contendra el valor de la celda mas pequeña
$peque = $miarray[0];
//Esta variable es para almacenar la posicion
$pos_insert = 0;
$pos_min = 0;

for ($i = $pos_insert; $i <= (sizeof($miarray)) ; $i++) { 
	for ($j = $pos_insert +1  ; $j <= (sizeof($miarray)) ; $j++) { 
		if ($miarray[$i] < $miarray[$j]) {

			$aux;
			$aux = $miarray[$i];

			$miarray[$i] = $miarray[$j];
			//$aux = $miarray[$j];
			
		}

	}
}

var_dump($miarray);



?>