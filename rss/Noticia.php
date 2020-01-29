<?php

    require_once('db_abstract_model.php');

    /**
     *
     */
    class Noticia extends DBAbstractModel{
        //Ahora os remito al ejemplo de Eugenia Bahit

        public $autor;
		public $titulo;
		public $categoria;
		private $noticia;
		protected $id_noticia;

		function __construct(){
			$this->db_name = 'noticias';
		}

		public function get($id_noticia=''){
			if ($id_noticia != '') :
				$this->query = "
					SELECT	id, autor, titulo, categoria, fecha
					FROM	noticias
					WHERE	email = '$user_email'
				";
				$this->get_results_from_query();
			endif;

			if(count($this->rows) == 1):
 				foreach ($this->rows[0] as $propiedad=>$valor):
 					$this->$propiedad = $valor;
 				endforeach;
 			endif;
		}

		public function set($user_data=array()){
			if(array_key_exists('id_noticia', $user_data)):
				$this->get($user_data['id_noticia']);
				if ($user_data['id_noticia'] != $this->email):
					foreach ($user_data as $campo => $valor):
						$$campo = $valor;
					endforeach;
					$this->query = "
						INSERT INTO noticias
						(autor, titulo, categoria, noticia)
						VALUES
						('$autor', '$titulo', '$categoria', '$noticia')
					";
					$this->execute_single_query();
				endif;
			endif;
		}

		public function edit($user_data=array()){
			foreach ($user_data as $campo => $valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
				UPDATE	usuarios
				SET		nombre='$nombre',
						apellido='$apellido',
						clave='$clave'
				WHERE	email='$email'
			";
			$this->execute_single_query();
		}

		public function delete($user_email=''){
			$this->query = "
				DELETE FROM	usuarios
				WHERE 		email = '$user_email'
			";
			$this->execute_single_query();
		}
    }
 ?>
