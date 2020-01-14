<?php 
//vamos a implementar una funcion que va a realizar una busqueda binaria donde el array sera indexado y sus valores enteros 

function busquedaBinariaInt($vector,$valor){
	$inicio = 0;
	$fin = sizeof($vector)-1;
	$pos = 0;

	while ($inicio <= $fin) {

		$pos = ($inicio + $fin) / 2;
		if ($vector[$pos] == $valor) {
			
			return $pos;
		} elseif ($vector[$pos] < $valor){

			$inicio = $pos + 1 ;

			return $pos;
			
		}else{

			$fin = $pos - 1 ;
		}
	}
	return -1;
}
$miarray = array(0=>1, 1=>5, 2=>7, 3=>10, 4=>11);
$posicion1 = busquedaBinariaInt($miarray , 80);
echo "El número 9 esta en la posicion $posicion1 ";
$posicion = busquedaBinariaInt($miarray , 7);
echo "El numero 7 esta en la posicion $posicion ";








 ?>