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