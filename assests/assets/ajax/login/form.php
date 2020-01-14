<?php 
	//iniciamos la sesion o recuperamos la anterior
	session_start();
	//comprobamos si la variable ya existe
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>

	<form id="loginform" method="POST" action="login.php" >

		<label>Usuario: </label>	
		<input type="text" name="email" id="email"><br>
		<label>Password: </label>
		<input type="password" name="contrasena" id="contrasena"><br>
		<input type="submit" name="login" id="login" value="Login">
	</form>

	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
</body>
</html>