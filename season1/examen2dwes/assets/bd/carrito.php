<?php
	/*Aviso muy importante, para poder soportar un sitio web basado en base de datos, que soporte caracteres especiales como las tildes y las ñ etc es importante
	seguir los siguientes pasos:
	la base de daos debe estar configurada para soportar charset spanish utf-8 o mdb4_spanish_ci y las tablas deben ser utf-general, en lo que respecta a la pagina web php, que insertara o mostrara datos, desde mysql debe incorporar los siguientes ajustes:
	$resultado = $com->query("SET NAMES UTF-8");
	*/
	$servername = "localhost";
	$username = "root";
	$password = "admin";
	$dbname = "myDB";
	$debug = $_GET["debug"];
	$currency           = '€ '; //currency symbol
	$shipping_cost      = 1.50; //shipping cost
	$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5,
                            'Other Tax' => 10
                            );


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if(isset($debug) && $debug == 1){
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
		
	}
	//Este bloque de codigo se ejecuta para empezar desde cero el modelo
	if(isset($debug) && $debug == 1){
		$sql_dropdb = "DROP DATABASE IF EXISTS myDB "; 
		echo $sql_dropdb;
		if ($conn->query($sql_dropdb)===TRUE) {
			echo "Base de datos eliminada con exito";
		}else{
			echo "Drop setence failed:" . $conn->error;
		}
	}

	//Este bloque de codigo no es necesario si ejecuto el DROP DATABASE, es decir, es solo didactico
	if(isset($debug) && $debug == 1){
		$sql_droptb = "DROP TABLE products_list IF EXISTS"; 
		if ($conn->query($sql_droptb)===TRUE) {
			echo "Tabla eliminada con exito";
		}else{
			echo "Drop setence failed:" . $conn->error;
		}
	}

	// Create database
	$sql = "CREATE DATABASE IF NOT EXISTS myDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci";
	$result = $conn->query($sql);

	if (isset($debug) && $debug == 1) {
		if ($result === TRUE) {
			echo "Database created successfully";
		} else {
			echo "Error creating database: " . $conn->error;
		}
	}

	// Create database
	$conn->select_db("myDB");
	$sql = "CREATE DATABASE IF NOT EXISTS myDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci";
	$result = $conn->query($sql);

	if (isset($debug) && $debug == 1) {
		if ($result === TRUE) {
			echo "Database created successfully";
		} else {
			echo "Error creating database: " . $conn->error;
		}
	}

	//seleccionar base de datos
	$conn->select_db('myDB');

	//crear tabla
	$table = "CREATE TABLE IF NOT EXISTS products_list (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  	product_name VARCHAR(60) NOT NULL,
  	product_desc text NOT NULL,
  	product_code VARCHAR(60) NOT NULL UNIQUE,
  	product_image VARCHAR(60) NOT NULL,
  	product_price DECIMAL(10,2) NOT NULL
	) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci";

	echo "<br>";

	$result_table = $conn->query($table);
	if (isset($debug) && $debug == 1) {
		if ($result_table === TRUE) {
			echo "Table Product List created successfully";
		} else {
			echo "Error creating table: " . $conn->error;
		}
	}

	//Insertar datos en la tabla 
	$sql1 = "INSERT INTO products_list (product_name,product_desc,product_code,product_image,product_price)
	VALUES ('lavadora','coas','00001','hola','200');";

	$sql1 .= "INSERT INTO products_list (product_name,product_desc,product_code,product_image,product_price)
	VALUES ('lavadoraf','coas','000013','hola','200');";

	$sql1 .= "INSERT INTO products_list (product_name,product_desc,product_code,product_image,product_price)
	VALUES ('lavadoral','coas','000012','hola','200')";

	echo "<br>";

	$result_table = $conn->multi_query($sql1);

	$last_id = $conn->insert_id;

	if (isset($debug) && $debug == 1) {

		if ($result_table  === TRUE) {

			

	    	echo "New record created successfully.Last id: " . $last_id;
		} 
		else {

	    	echo "Error: " . $sql1 . "<br>" . $conn->error;
		}
	}






	$conn->close();

?>