<html>
<body>
<form  method="get">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>


<?php if (isset($_GET["Enviar"])){	 ?>

Hola <?php isset($_GET["nombre"])? print $_GET["nombre"]:" ";?><br>
Tu email es: <?php isset($_GET["email"]) ? print $_GET["email"]: " ";?>

<?php }  ?>
</body>
</html>