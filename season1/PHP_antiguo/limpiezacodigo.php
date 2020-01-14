<?php
$salto_linea = "\n";
$cadena = " cadena con varios espacios en blanco " ;
echo $salto_linea . $cadena ;
echo "<br>";
echo $salto_linea . ltrim($cadena) ;

echo "<br>";
echo $salto_linea . chop($cadena) ;

echo "<br>";
echo $salto_linea . trim($cadena) ;

?> 