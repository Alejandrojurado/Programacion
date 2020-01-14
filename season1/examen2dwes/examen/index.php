<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>

	<form id="loginform" method="post" action="registro.php">

		<div>
			<label>Nombre</label>
			<input type="text" name="name" id="name"><br>
			<label>Apellido</label>
			<input type="text" name="lastname" id="lastname"><br>
			<label>email</label>
			<input type="email" name="email" id="email"><br>
			<label>contrasena</label>
			<input type="password" name="password" id="password"><br>
			<input type="submit" name="registro" id="registro" value="Registro">
            <a href="registro.php">login</a>
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
	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
	
</body>
</html>