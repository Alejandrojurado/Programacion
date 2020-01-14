<?php  
//Recuperacion de datos
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];
	$vehiculo = $_GET['vehiculo'];
	$observaciones = $_GET['observaciones'];

	echo "<h1>Hola $nombre $apellido, sus datos se han guardado con exito. </h1> ";
	echo "<h4><p>Sus datos son </p></h4>";
	echo "<p>Nombre: $nombre</p>";
	echo "<p>Apellido $apellido</p>";
	for ($i=0; $i < count($vehiculo); $i++) { 
		
		echo "<br>vehiculo: " . $i . ":" . $vehiculo[$i];
	}
	echo "<p>vehiculos: $vehiculo</p>";

		
	echo "<p>observaciones: $observaciones</p>";





















?>