 <?php
/*MUY IMPORTANTES para poder soportar un sitio web basado en bases de datos 
que soporte caracteres especiale propios del castellano como las tildes y la ñ
 es importante seguir los siguientes pasos 
 1 la base de datos debe estar configurada para soportar charset utf 8 spanish
  utf 8 mdb4_spanish_ci o utf 8 unicode y las tablas deben ser utf 8 general unicode 
  en lo que respecta a la pagina  web php que insertara o mostrara datos desde mysql debe incorporar los siguientes ajustes que son 
  <html lang=es> 
  <meta charset ="utf8" 

*/$servername = "localhost";
$username = "root";
$password = "admin";
$debug = $_GET["debug"];
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (isset($debug)&&$debug==1){


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully ";
}
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql ) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$mysqli->select_db("myDB");
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci";

$result = $conn->query("SET NAMES 'utf8'")
$result = $sql
{
	$this->foo = $foo;
}
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();

?> 