<!--Alejandro José Jurado Reyes-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Examen Grupo A</title>
	<style type="text/css">
		#contenedor1{
			border-top: 1px black solid;
			border-bottom: 1px black solid;

			text-align:  center;
		}
		
	</style>

</head>
<body>

	<header>
		<h1>TABLA DE MULTIPLICAR</h1>
		


	</header>

	<form id="contenedor1" method="GET"  >
		<p>Selecciona un numero de la tabla de multiplicar que quieres visualizar</p>
		
		Tabla de multiplicar:<input type="number" name="tablas"><button name="enviar">enviar</button>




	</form>


	<div id="contendor2">

		<?php
		$num1 = $_GET["tablas"];
		$num = array('1' => 1,'2' => 2, '3' =>3 , '4' =>4 , '5' =>5 , '6' =>6 , '7' => 7, '8' => 8, '9' => 9 );

				echo($num1);
				for ($i=0; $i < $num.length; $i++) { 


					echo $num[$i] ;
				}


			







		?>
			






	</div>

	<footer>
		
		<p>Nombre: Alejandro José Jurado Reyes</p>

		<p>Fecha de nacimiento:27/05/1999</p>

		<p>Número de examen:25760</p>



	</footer>
	
</body>
</html>