<!--Escriba un programa que cada vez que se ejecute muestre la tirada de dos dados al azar y diga 
si ha salido una pareja de valores iguales o el mayor de los valores optenidos -->
<?php
	
	//Genera dos números aleatorios del 1-6 representando el azar de los dados.
	$ramdom_dado1 = rand(1,6);
	$ramdom_dado2 = rand(1,6);
	$ramdom_dado3= rand(1,6);
	$ramdom_dado4 = rand(1,6);

	$valor1 = $ramdom_dado1 + $ramdom_dado3 ;
	$valor2 = $ramdom_dado2 + $ramdom_dado4 ;

	if ($valor1 == $valor2){

		echo "Los dos dados han salido $valor1";

	}
	else{
		if ($valor1 > $valor2) {
		echo "Ha ganado el jugador 1 con un dado $valor1 ";
			$resultado1="ganador";
			$resultado2="perdedor";
			


		}else{
			echo "Ha ganado el jugador 2 con un dado $valor2" ;
			$resultado1="perdedor";
			$resultado2="ganador";
			

		}
		
		
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dados</title>
	<style type="text/css">
		#contenedor{
			width: 1000px;
			margin: 0 auto;
			
		}
		.etiqueta{
			width: 400px;
			float: left;
		}

		
		.perdedor{
			border: 4px solid red;

		}
		
		.ganador{
			border: 4px solid blue;

		}


	</style>

</head>
<body>
	<div id="contenedor">
		
		<div id="lbldado1" class="etiqueta">Jugador uno</div>
	
		<div id="lbldado2" class="etiqueta">Jugador dos</div>
	
		<div id="dado1 " class="etiqueta <?=$resultado1;?>">
			<img src="images/dados/dado-<?=$ramdom_dado1;?>.png">
			<img src="images/dados/dado-<?=$ramdom_dado3;?>.png">
		</div>
	
		<div id="dado2" class="etiqueta <?=$resultado2;?> ">
			<img src="images/dados/dado-<?=$ramdom_dado2;?>.png">
			<img src="images/dados/dado-<?=$ramdom_dado4;?>.png">
		</div>

	</div>
	
</body>
</html>