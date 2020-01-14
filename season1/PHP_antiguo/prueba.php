<?php 

function duplicar($var){
	
	global $temp;
	$temp = $var * 2;

}

$temp = 1;
$variable = 5;
	duplicar($variable);
		echo "El valor de la variable \$temp es: $temp";
?>


