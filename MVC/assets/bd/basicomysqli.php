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
	$dbtable = "MyGuests";
	$debug = $_GET["debug"];
	

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if(isset($debug) && $debug == 1){
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully"."<br>";
	}

	//Este bloque de codigo se ejecuta para empezar desde cero el modelo
	if(isset($debug) && $debug == 1){
		$sql_dropdb = "DROP DATABASE IF EXISTS $dbname "; 
		echo $sql_dropdb;
		if ($conn->query($sql_dropdb)===TRUE) {
			echo "Base de datos eliminada con exito"."<br>";
		}else{
			echo "Drop setence failed:" . $conn->error . "<br>";
		}
	}

	//Este bloque de codigo no es necesario si ejecuto el DROP DATABASE, es decir, es solo didactico
	if(isset($debug) && $debug == 1){
		$sql_droptb = "DROP TABLE $dbtable IF EXISTS"; 
		if ($conn->query($sql_droptb)===TRUE) {
			echo "Tabla eliminada con exito"."<br>";
		}else{
			echo "Drop setence failed:" . $conn->error . "<br>";
		}
	}

	// Create database
	$sql = "CREATE DATABASE IF NOT EXISTS $dbname DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci";
	$result = $conn->query($sql);
	if (isset($debug) && $debug == 1) {
		if ($result === TRUE) {
			echo "Database created successfully"."<br>";
		} else {
			echo "Error creating database: " . $conn->error. "<br>";
		}
	}

	//Selecciona la base de datos
	$conn->select_db($dbname);
	//Crea la tabla
	$table = "CREATE TABLE IF NOT EXISTS  $dbtable (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	contrasena VARCHAR(255) NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci";

	$result_table = $conn->query($table);

	if (isset($debug) && $debug == 1) {
		if ($result_table === TRUE) {
			echo "Table $dbtable created successfully" . "<br>";
		} else {
			echo "Error creating table: " . $conn->error. "<br>";
		}
	}
	
	$sql = "INSERT INTO $dbtable (firstname, lastname, email, contrasena)
	VALUES ( 'Julie', 'Dooley', 'julie@example.com', '1111');";
	
		
	$sql .= "INSERT INTO $dbtable (firstname, lastname, email, contrasena)
	VALUES ( 'Mary', 'Moe', 'mary@example.com', '222');";
	
		
	$sql .= "INSERT INTO $dbtable (firstname, lastname, email, contrasena)
	VALUES ('John', 'Doe', 'john@example.com','3333')";

	// prepare and bind
/*
	$stmt = $conn->prepare("INSERT INTO $dbtable (firstname, lastname, email, contrasena) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("sss", $firstname, $lastname, $email, $contrasena);

	// set parameters and execute
	$firstname = "John";
	$lastname = "Doe";
	$email = "john@example.com";
	$contrasena = "1111";
	$stmt->execute();

	$firstname = "Mary";
	$lastname = "Moe";
	$email = "mary@example.com";
	$contrasena = "2222";
	$stmt->execute();

	$firstname = "Julie";
	$lastname = "Dooley";
	$email = "julie@example.com";
	$contrasena = "3333";
	$stmt->execute();

	

	

	$stmt->close();*/

	echo "<br>";
	//Buscamos la informacion de la tabla 

	echo "<strong>Buscamos la informacion de la tabla</strong> <br>";
	$sql = "SELECT id, firstname, lastname, email FROM $dbtable ";

	$result = $conn->query($sql);

	if (isset($debug) && $debug == 1) {
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<table style = 'border: 1px black solid;' > <tr><th> id:  " . "".$row["id"]."</th></tr> " 
		        ." ".
		        " <tr><th>- Name: " . $row["firstname"]
		        . " " . 
		        $row["lastname"]
		        ." "."<br>".
		        "-Email: ". $row["email"]."</th></tr> "
		        ."</table><br>";
		    }
		} else {
		    echo "0 results";
		}
	}
	//Buscamos por el apellido
	echo "<strong>Buscamos un apellido con el WHERE</strong><br>";
	$sql = "SELECT id, firstname, lastname, email FROM $dbtable WHERE lastname='Doe'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<table style = 'border: 1px black solid;' > <tr><th> id:  " . "".$row["id"]."</th></tr> " 
		        ." ".
		        " <tr><th>- Name: " . $row["firstname"]
		        . " " . 
		        $row["lastname"]
		        ." "."<br>".
		        "-Email: ". $row["email"]."</th></tr> "
		        ."</table><br>";
	    }
	} else {
	    echo "0 results";
	}

	//Utiliciamos el order by 
	echo "<strong>Ordenado descendiente usando el ORDER BY </strong><br>";
	$sql = "SELECT id, firstname, lastname, email FROM $dbtable ORDER BY id DESC LIMIT 3";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	         echo "<table style = 'border: 1px black solid;' > <tr><th> id:  " . "".$row["id"]."</th></tr> " 
			        ." ".
			        " <tr><th>- Name: " . $row["firstname"]
			        . " " . 
			        $row["lastname"]
			        ." "."<br>".
			        "-Email: ". $row["email"]."</th></tr> "
			        ."</table><br>";
	    }
	} else {
	    echo "0 results";
	}

	echo "<br>";

	// sql to delete a record
/*
	echo "<strong>Borrar un correo: </strong>";
	
	$sql = "DELETE FROM MyGuests WHERE email = 'mary@example.com' ";

	$results = $conn->query($sql) ;
	
	if (isset($debug) && $debug == 1) {

		if ($results === TRUE) {
		    echo "Record deleted successfully <br>";
		} else {
		    echo "Error deleting record: " . $conn->error."<br>";
		}
	}
*/
	//Cambiar un apellido con un UPDATE

	echo "<strong>Cambio de apellido: </strong>";
	$sql = "UPDATE MyGuests SET lastname='Trabolta' WHERE id=1";


	$results = $conn->query($sql) ;
	
	if (isset($debug) && $debug == 1) {

		if ($results === TRUE) {
		    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . $conn->error;
		}
	}


	






$result_id = $conn->multi_query($sql);
	$last_id = $conn->insert_id;

	if (isset($debug) && $debug == 1) {
		if ( $result_id === TRUE) {
			 ECHO " NEW RECORDS CREATED SUCESSFULLY". "<br>";
			 echo "Ultimo id es : " . $last_id . "<br>";
			} else {
				 
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
		
	
	$conn->close();
?>