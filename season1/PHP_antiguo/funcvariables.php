<?php
	$diasemana = array('0' => "Domingo", '1' => "Lunes", '2' => "Martes", '3' => "Miércoles", '4' => "Jueves", '5' => "Viernes", '6' => "Sábado");
	function factorial($numero)
	{
		if ($numero == 1) {
			return $numero;
		}
		else {
			return $numero * factorial($numero-1);
		}
	} 
	//La diferencia entre isSet , isNull u isEmpty
	/*Las tres funciones devuelven un valor booleano si estas funciones no se usan en la manera correcta podrian devolver
	resultados inesperados (erroes logicos o semanticos) muy dificiles de detctar.
	La funcion isset y la funcion isempty se ven como funciones contrarias pero no siempre es así 
	veamos claramente la diferencia 
	isSet: determina si una variable se a creado (existe) y su valor no es null dicho de otra forma solo devolvera true solo cuando la variable no sea null
	isEmpty: solo determina si esta vacia en otras palabras devolvera true si la variable si es un string vacio , false ,array vaciao , null , "0" , 0 , varariable unset
	isNull: busca o descubre si una variable es null 




		*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Funciones con parámetros variables</title>
</head>
<body>
	<label for="dia">El día de hoy es: <?= $diasemana[date("w")]?>, <?=date("d-m-Y");?></label></br>
	<?php echo "Sabías que el factorial del día de hoy es: ". factorial(date("d")) ." <br>";?>
</body>
</html>