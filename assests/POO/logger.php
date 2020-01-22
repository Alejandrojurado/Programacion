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
			$this->db_name = 'myDB';
		}

		public function write_mysql_log($message , $conn){
				// Check database connection
			  if( ($this->conn instanceof MySQLi) == false) {
			    return array(status => false, message => 'MySQL connection is invalid');
			  }

			  	// Check message
			  if($this->message == '') {
			    return array(status => false, message => 'Message is empty');
			  }

			  	// Get IP address
			  if( ($this->remote_addr = $_SERVER['REMOTE_ADDR']) == '') {
			    $this->remote_addr = "REMOTE_ADDR_UNKNOWN";
			  }

			  	// Get requested script
			  if( ($this->request_uri = $_SERVER['REQUEST_URI']) == '') {
			    $this->request_uri = "REQUEST_URI_UNKNOWN";
			  }

			  	// Escape values
			  $message     = $db->escape_string($message);
			  $remote_addr = $db->escape_string($remote_addr);
			  $request_uri = $db->escape_string($request_uri);

			  	// Construct query
			  $sql = "INSERT INTO my_log (remote_addr, request_uri, message) VALUES('$remote_addr', '$request_uri','$message')";

			  	// Execute query and save data
			  $result = $db->query($sql);

			  if($result) {
			    return array(status => true);
			  }
			  else {
			    return array(status => false, message => 'Unable to write to the database');
			  }

		}




















	}
?>
