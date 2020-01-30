<?php

	require_once('db_abstract_model.php');

	/**
	 *
	 */
	class Logger extends DBAbstractModel{

		#Atributo
		private $message;

		#Constructor
		function __construct(){
			$message = null;
		}

		#Gettter y setter de message
		public function getMessage(){
			return $this->message;
		}

		public function setMessage($message){
			$this->message = $message;
		}

		#Métodos abtractos para ABM de clases que hereden.
		public function get(){
			return null;
		}
		public function set(){
			return null;
		}
		public function edit(){
			return null;
		}
		public function delete(){
			return null;
		}
		#Metodo de logger
		public function write_mysql_log(){
			#Variable local
			$logger_table = "my_log";
  		  	// Check message
		  	if($this->message == '') {
		    	return array(status => false, message => 'El mensaje del log esta vacio');
		  	}

		  	// Get IP address
		  	if( ($remote_addr = $_SERVER['REMOTE_ADDR']) == '') {
		    	$remote_addr = "REMOTE_ADDR_UNKNOWN";
		  	}

		  	// Get requested script
		  	if( ($request_uri = $_SERVER['REQUEST_URI']) == '') {
	    		$request_uri = "REQUEST_URI_UNKNOWN";
		  	}
			//Escape Values

		  	// Construct query
		  	$this->query = "INSERT INTO $logger_table (remote_addr, request_uri, message) VALUES('$remote_addr', '$request_uri','$this->message')";

		  	// Execute query and save data
		  	$this->execute_single_query();


		}
	}
?>
