<?php 

// 1.- Crea una variable y asígnale el valor "a-a-r-e-f-a".
$variable = "a-a-r-e-f-a";

echo "Ejercicio 1:  $variable"; 
echo "<br>";



//2.- Cambia todas las letras 'a' de la cadena por el valor 'tortuga'.

$variable = str_replace("a", "tortuga", $variable);

echo "Ejercicio 2: $variable ";
echo "<br>";

//3.- Separa los valores de esta variable en un array. Utiliza el '-' como separador.

$array = explode('-', $variable);

echo "Ejercicio 3:  <br> ";

print_r ($array);

echo "<br>";


//4.- Ordena el array obtenido alfabéticamente, en orden descendente.


rsort($array);

echo "Ejercicio 4:  <br> ";

print_r($array);

echo "<br/>";


//5.- Crea un nuevo array y añade únicamente de los valores de la anterior array, los que NO contengan la letra 'a'.

$nueva_array =  array();
$contador = 0;

foreach ($array as $contenido ) {
	if (strpos($contenido, 'a')== false) {

		$nueva_array [$contador] = $contenido;

		$contador ++;
	}
}


echo "Ejercicio 5 : <br>";

print_r($nueva_array);

echo "<br/>";


//6.- Muestra por pantalla la dimensión, es decir, cuántos objetos contiene este último array. Este valor debe ser 3.

$cantidad = count($nueva_array);

echo "Ejercicio 6:  $cantidad <br>" ;







/*Soluciones

Ejercicio 1: a-a-r-e-f-a

Ejercicio 2: tortuga-tortuga-r-e-f-tortuga 


Ejercicio 3:
Array ( [0] => tortuga [1] => tortuga [2] => r [3] => e [4] => f [5] => tortuga )


Ejercicio 4:
Array ( [0] => tortuga [1] => tortuga [2] => tortuga [3] => r [4] => f [5] => e )

Ejercicio 5 :
Array ( [0] => r [1] => f [2] => e )

Ejercicio 6: 3









*/



?>
