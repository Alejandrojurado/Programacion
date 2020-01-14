<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Examen A</title>

	<style type="text/css">
		h1{
			text-align: center;
		}
		#contedor{	
			width: 100%;
			max-height: 10000px;			
			border-top: 1px black solid;
			border-bottom: 1px black solid;


		}
		#centro{
			text-align: center;
		}

		#j1{

			margin-left: 45%;

		}
		#j2{

			float: right;

			margin-right: 46%;


			

		}


	</style>

</head>
<body>
	<h1>¡PIEDRA, PAPEL, TIJERAS!</h1>
	<div id="contedor">
		
		<p id="centro">Actualize la página para mostrar otra partida.</p>
		<p id="centro">Jugador Adversario</p>

		<?php

			$j1 = random_int(1, 3);
			$j2 = random_int(1, 3);


			if ($j1 == 1) {
				echo "<span style='font-size: 4em' id='j1'>&#x1F596</span>";
			} else {
				if ($j1 == 2) {
					echo "<span style='font-size: 4em' id='j1'>&#x1F91C</span>";
				} else {

					echo "<span style='font-size: 4em' id='j1'>&#x1F91A</span>";
					
				}
				
			}

			if ($j2 == 1) {
				echo "<span style='font-size: 4em'id='j2' >&#x1F596</span>";
			} else {
				if ($j2 == 2) {
					echo "<span style='font-size: 4em' id='j2'>&#x1F91B</span>";
				} else {

					echo "<span style='font-size: 4em ;'id='j2' >&#x1F91A</span>";
					
				}
				
			}


			if ($j1 < $j2) {
				 echo "Ha ganado el jugador 2";
				
			}
			else{

				if ($j1 > $j2) {
				 	echo "Ha ganado el jugador 1";
				 } else {
				 	echo "empatan";
				 }
				  
				
			}
			
					

			

		?>

		



		
	</div>

	<p>Escriba aquí su nombre: Alejandro José Jurado Reyes </p>	
	<p>Escriba aquí su fecha de nacimiento: 27/05/1999</p>	 
	<p>Escriba aquí el nombre de examen: 56791 </p>	
	
</body>
</html>