<?php
	
	#Delacro la clase
	
	class Producto{

		#Defino algunas propiedades

		public $precio;
		
		public $nommbre;

		protected $estado;


		#Constructor de la clase
		function __construct(){

			$this->nombre = null;
			$this->precio = null;
			$this->set_estado_producto('en uso ...');
		}


		#Metodo
		
		protected function set_estado_producto($estado){

			$this->estado = $estado;

		}

		public function get_estado_producto(){

			return $this->estado;
		}

		#Destructor

		function __destruct(){

			$this->nombre = null;
			$this->precio = null;
			$this->set_estado_producto('liberado ...');
			
			print'El obejeto ha sido destruido ';

		}


	}

	$prod1 = new Producto();

	echo $prod1->get_estado_producto();

	echo "<br>";

	unset($prod1);


	



?>