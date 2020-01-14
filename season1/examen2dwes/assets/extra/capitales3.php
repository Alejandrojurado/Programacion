<?php
function capitales() {

	$numero_argumentos = func_num_args();
	$Pais = $numero_argumentos > 0 ? func_get_arg(0) : "china";
	$Capital = $numero_argumentos > 1 ? func_get_arg(1) : "pekin";
	$habitantes = $numero_argumentos > 2 ? func_get_arg (2) :"560000000 " ;

	return ("Número de argumentos es: $numero_arguraentos. La capital de $Pais es $Capital y tiene $habitantes habitantes.<br>");
	}

echo capitales();
echo capitales("Japon", "tokio");
echo capitales("Rusia", "Moscu", "10000000000000");
?> 