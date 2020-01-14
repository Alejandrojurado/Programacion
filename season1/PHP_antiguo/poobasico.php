<?php  


	class pagina_Web{
		
		#atributo
		public $titulo;

		#contructor

		function __contruct(){
			$this->set_Titulo("Titulo por defecto");

		}


		#metodo

		function set_Titulo($titulo){

			$this->titulo = $titulo;

		}

		function get_Titulo(){

			return $this->titulo;

		}

		function cabecera(){

			echo "<!DOCTYPE html>\n";
				echo "<html>\n";
				echo"\t<head>\n";				
				echo"\t\t<title>$this->titulo</title>\n";
			echo"\t</head>\n";	
						
			

		}

		function cuerpo(){
			echo"\t<body>\n";
				echo"\t\t<h1>Mi sitio Web</h1>\n";
				echo"\t\t<p>Este sitio es de Alejandro </p>\n";

		}

		function pie(){
			
				echo"\t\t<footer>\n";
						echo"\t\t\t<p><small>&copyEsta pagina web pertenece a Alejandro José Jurado Reyes  2019</small></p>\n";
					
				echo"\t\t</footer>\n";		
			echo"\t</body>\n";
			echo"</html>\n";

						

		}

		function mostrar_pagina(){
			
			echo $this->cabecera ();
			
			echo $this->cuerpo();
			
			echo $this->pie(); 

		}

		
		
	}

	$pagina = new pagina_Web();
	$pagina->set_Titulo("Página Web nueva");
	$pagina->mostrar_pagina (); 




?>