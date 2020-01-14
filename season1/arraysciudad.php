<?php
$ciudades = array ("Badajoz","Mérida","Cáceres","Plasencia") ;

$ciudades["España"] = "Madrid";

$ciudades["Portugal"] = "Lisboa";

$ciudades["Francia" ] = "Paris";

function recorre(&$ciudades) {

	if (!current($ciudades)) {
		reset($ciudades);
		
	}

	do {

		$valor = current($ciudades) ;

		$indice = key($ciudades);

		echo ("$indice: valor: $valor<br>");
		
	}while (next($ciudades));

}
function recorre_atras(&$ciudades) {

	end($ciudades);

	do {

		$valor = current($ciudades) ;

		$indice = key($ciudades);

		echo ("$indice: valor: $valor<br>");

	} while (prev($ciudades));

}

function recorre_flip ($numero) {
	foreach ($numero as $indice => $valor) {
	
	echo "$indice: $valor<br>";

	}

	$numero = array("uno" => 1,"dos" => 2, "tres" => 3,"cuatro" => 4);
	echo ("Números<br> " ) ;
	recorre($numero);
	echo ("Números intercambiados<br>") ;
	
} 
function recorre_reverse ($numero) {
	foreach ($numero as $indice => $valor) {
	
	echo "$indice: $valor<br>";

	}

	$numero = array("uno" => 1,"dos" => 2, "tres" => 3,"cuatro" => 4);
	echo ("Números intercambiados<br>" ) ;
	recorre(array_reverse($numero)); 
	echo ("Números intercambiados<br>") ;
	
} 

function recorre_shuffle ($numero) {
	foreach ($numero as $indice => $valor) {
	
	echo "$indice: $valor<br>";

	}

	$numero = array("uno" => 1,"dos" => 2, "tres" => 3,"cuatro" => 4);
	echo ("Números mezclados<br> " ) ;
	shuffle($numero);
	
	
} 


	
	recorre_shuffle($numero);
	echo "<br>";
	recorre_flip(array_flip($numero));
	echo "<br>"; 
	recorre_reverse(array_flip($numero));
	echo "<br>"; 
	recorre($ciudades);
	echo "<br>"; 
	recorre_atras($ciudades);

?> 