<?php 


$miarray= array('0' =>49 ,'1'=>24,'2'=>36,'3'=> 80,'4'=>31 );

var_dump($miarray);
//Esta variable es para almacenar la posicion
$pos_insert = 0;
$aux=0;


	$tamano = sizeof($miarray);
	for ($pos_insert=0; $pos_insert < $tamano ; $pos_insert++) { 
		for ($j=$pos_insert + 1 ; $j < $tamano; $j++) { 
			if ($miarray [$pos_insert ] != $miarray [$j]) {
				if ($miarray [$pos_insert] > $miarray[$j]) {
					$aux = $miarray[$pos_insert];
					$miarray[$pos_insert] = $miarray[$j];
					$miarray[$j] = $aux;
				}
			}

			
		}
		
	}
 
 	var_dump($miarray);






 ?>