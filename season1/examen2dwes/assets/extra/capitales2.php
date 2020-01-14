<?php

	function capitales($datos){

		$pais = isset($datos ['pais']) ? $datos ['pais'] : "Japon" ;

		$capital = isset($datos ['capital']) ? $datos ['capital'] : "tokio" ;

		$habitantes = isset($datos ['habitantes']) ? $datos ['habitantes'] : "50000000";

		return ("La capital de $pais es $capital y tiene $habitantes habitantes. <br>");

	}

	//Introducimoes en el array los datos uno por uno que sea mas facil de entender

	$datos ['pais'] = "Japon" ;

	echo capitales($datos);

	$datos ['pais'] = "China"; 
	$datos ['capital'] = "Pekin";	
	echo capitales($datos);
	

	$datos ['pais'] = "Francia"; 
	$datos ['capital'] = "Paris";	
	$datos ['habitantes'] = "5000000000";
	echo capitales($datos);
	








  ?>