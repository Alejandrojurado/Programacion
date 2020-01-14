<?php
if (isset($_POST['email']) && $_POST['email'] && isset($_POST['contrasena']) && $_POST['contrasena']) {

	$user = $_POST['email'];
	$pass = $_POST['contrasena'];
    
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

	//Selecciona la base de datos
	$conn->select_db($dbname);

		
	$sql = "SELECT * FROM $dbtable WHERE email = '$user' AND contrasena = md5('$pass')";

	$result = $conn->query($sql);

	
		if ($result->num_rows > 0) {

			echo json_encode(array('success' => 1));
			
		    
		} 
		  


} else {
    echo json_encode(array('success' => 0));
}

?>