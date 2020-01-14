<?php

function duplicar_caracteres_inverso(&$cadena){
	$tamanio = strlen($cadena);
	$cadena_aux = "";

	for ($i=($tamanio)-1 ; $i >= 0 ; $i--) { 

		$cadena_aux .= $cadena{$i};
		
	}
	$cadena = $cadena_aux;
	return $cadena;

}


$frase = "Lo mismo da que da lo mismo";

echo duplicar_caracteres_inverso ($frase); 

echo "<br>";

echo duplicar_caracteres_inverso ($frase); 

echo "Asi se calcula el numero 2 en potencia de 5";

$calcula = <<<INICIO 

<p>5 2x2 = 4</p>
<p>4 4x2 = 8</p>
<p>3 8x2 = 16</p>
<p>2 16x2 = 32</p>
<p>1 32x2 = 64</p>







INICIO;

echo $calcula;



?>