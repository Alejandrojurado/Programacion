 <?php
 session_start();

if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$servername = "localhost";
	$username = "root";
	$password = "admin";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}



	$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE email='$user' AND contrasena='".md5($pass)."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$_SESSION['userlogin'] = $user;
	    echo json_encode(array('success' => 1));
	    
	} else {
	    echo json_encode(array('success' => 0));
	}
        $conn->close();
   
} 
else {
    echo json_encode(array('success' => 0));
}


?> 
