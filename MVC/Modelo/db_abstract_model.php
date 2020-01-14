<?php 
/*Para poder soportar un sitio web basado en bases de datos que soporten caracteres especiales del 
castallano como la tilde , la ñ ,etc. Es importante seguir estos pasos.
la base de datos debe estar  configurada par soportar charset spanish o UTF8-mdb4_spanish_ci y las tablas deben ser utf8 general 
en lo que respecta a la pagina weeb php que insertaa datos desde msql debe incorporar los siguientes ajustes:
1-html lang = es
2-META charset="utf8"
$resultado=$conn->query("set names" , 'utf8');
*/

	abstract class DBAbstractModel{

		private static $db_host = 'localhost';
		private static $db_user = 'root';
		private static $db_pass = 'admin';
		protected $db_name = 'myDB';
		protected $query;
		protected $rows = array();

		# métodos abstractos para ABM de clases que hereden 

		abstract protected function get ();
		abstract protected function set ();
		abstract protected function edit ();
		abstract protected function delete ();

		# los siguientes métodos pueden definirse con exactitud
	 	# y no son abstractos
		# Conectar a la base de datos 
		private function open_connection(){
			$this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
		}

		# Desconectar la base de datos 
		private function close_connetion(){
			$this->conn->close();
		}

		# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE 
		protected function execute_single_query(){
			$this->open_connection();
			$this->conn->query($this->query);
			$this->close_connetion();
		}

		# Traer resultados de una consulta en un Array
		protected function get_results_from_query(){
			$this->open_connection();
			$result = $this->conn->query($this->query);
			while ($this->rows[] = $result->fetch_assoc());
			$result->close();
			$this->close_connetion();
			array_pop($this->rows);

		}
	}
?>