<?php

$resultado = $_POST['valorCaja1'] + $_POST['valorCaja2'];
sleep(2);
//echo $resultado;
//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
header('content-Type: application/json');
//Guardamos los datos en un array
$datos = array(
    'valorCaja1' => $suma1 , 
    'valorCaja2' => $suma2,    
    'cantidad' => $resultado
    
);

echo json_encode($datos, JSON_FORCE_OBJECT);
?>

