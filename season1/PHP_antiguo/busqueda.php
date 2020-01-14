<?php 
//vamos a implementar una funcion que va a realizar una busqueda binaria donde el array sera indexado y sus valores enteros 

function busquedaBinariaInt($vector,$valor){
	$inicio = 0;
	$fin = sizeof($vector)-1;
	$pos = 0;

	while ($inicio <= $fin) {

		$pos = ($inicio + $fin) / 2;
		$pos = intval($pos);
		
		if ($vector[$pos] == $valor) {
			
			return $pos;
		} elseif ($vector[$pos] < $valor){

			$inicio = $pos + 1 ;

			
			
		}else{

			$fin = $pos - 1 ;
		}
	}
	return -1;
}
$miarray = array(0=>1, 1=>5, 2=>7, 3=>10, 4=>11);
$posicion1 = busquedaBinariaInt($miarray , 80);
echo "El número 80 esta en la posicion $posicion1 <br>";
$posicion = busquedaBinariaInt($miarray , 11);
echo "El numero 11 esta en la posicion $posicion ";








 ?>