 <?php
 if (isset($_POST['name']) && $_POST['name'] && isset($_POST['lastname']) && $_POST['lastname'] && isset($_POST['email']) && $_POST['email'] && isset($_POST['password']) && $_POST['password']) {

	$user = $_POST['name'];
	$last = $_POST['lastname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$servername = "localhost";
	$username = "root";
	$password = "admin";
	$dbname = "myDB";
	$dbtable = "MyGuests";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO $dbtable (firstname, lastname, email, contrasena)
	VALUES ( '$user', '$last', '$email', md5('$pass'));";

	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {

			echo json_encode(array('success' => 1));		    
	} 

 	else {
     //echo json_encode(array('success' => 0));
	}
   
} 

?> 


<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
<form id="loginform" method="post" action="login.php">
    <div>
        Username:
        <input type="text" name="username" id="username" />
        Password:
        <input type="password" name="password" id="password" />    
        <input type="submit" name="loginBtn" id="loginBtn" value="Login" />
        <a href="logout.php">Cerrar Sesión</a>
        <a href="formulario.php">Registro</a>
    </div>
</form>
<script type="text/javascript">
$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);

                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    location.href = "privado.php";
                    exit;
                }
                else
                {
                    alert("No ha podido acceder al área privado porque sus credenciales de acceso no son válidas");
                    location.href = "publico.php";
                    exit;
                }
           }
       });
     });
});
</script>
</body>
</html>

