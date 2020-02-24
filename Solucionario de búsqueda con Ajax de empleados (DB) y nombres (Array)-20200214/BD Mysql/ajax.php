 <?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "myDB";

$html = '';

$key = $_POST['key'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM empleados where nombre like '$key%'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $html .= "Empleado: id: " . $row["id"]. " - " . $row["nombre"]. " " . $row["apellido"]. "<br>";
    }
} else {
    echo "No ha sugerencias";
}
$conn->close();



echo $html;
?>
