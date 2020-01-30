<?php
session_start();
if(isset($_SESSION['userlogin'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Privado - Página restringida a usuarios autenticados</title>
</head>
<body>
	Bienvenido al área privado.
</body>
</html>
<?php
}
else{
	header('WWW-Authenticate: Basic realm="Contenido restringido"');
    header("HTTP/1.0 401 Unauthorized");
    exit;
}