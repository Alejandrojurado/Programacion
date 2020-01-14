<?php
	
	 

	 /*Si el array esta vacio lo introducimos en la posicion 0 y sino en la 
	 posicion de su tamño , por que empieza en 0*/
	function arr_push(&$array,$elemento){

		if (empty($array)) {

			$array[0]=$elemento;
			
		}else{

			$tamano=count($array);
			$array[$tamano]=$elemento;
		}

		

		

	}

	#Si el array esta vacio exit() y sino devolver el ultimo elemento
	function arr_pull(&$array){

		if (!empty($array)) {

			$ultimo = count($array)-1;
			$valor_ultimo = $array[$ultimo];
			unset($array[$ultimo]);
			return $valor_ultimo;
		}


	}

	$miarray = array();
	arr_push($miarray,5);
	arr_push($miarray,8);
	arr_push($miarray,24);
	


	echo arr_pull($miarray);
	echo "<pre>";
	print_r($array);
	echo "<pre>";


	





?>