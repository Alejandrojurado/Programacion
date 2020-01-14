<?php  

//Queremos crear un programa que siga las expresiones regulares 
$correo = "luismiguel.cabezas@gmail.com";

$correo2="LUIS@ncc.aupex.org";

$correo3 ="lu@is.cabezas@ncc.aupex.org";

$correo4="luismiguel@gmail.com";

$correo5="luismiguel22@gmail.com";

$texto = "El correo es de $correo";

$texto2 = "El correo es de $correo2";

$texto3 = "El correo es de $correo3";

$texto4 = "El correo es de $correo4";

$texto5 = "El correo es de $correo5";

$exreg = "/^[a-z,0-9]+\.*[a-z,0-9]*@[a-z]+\.(org|es|com)$/i";

$exreg2 ="/^[a-z]+[0-9]+(\.[a-z,0-9]+)*@[a-z]+\.(org|es|com)$/i" ;



if (preg_match("/^[a-z,0-9]+\.*[a-z,0-9]*@[a-z]+\.(org|es|com)$/i", $correo)) {

	echo preg_replace("/^[a-z]+[0-9]+(\.[a-z,0-9]+)*@[a-z]+\.(org|es|com)$/i", "luis Miguel", $texto) ."<br>";
	
} else {
	echo "El correo no se acepta <br>";
}


if (preg_match("/^[a-z,0-9]+\.*[a-z,0-9]*@[a-z]+\.(org|es|com)$/i", $correo2)) {

	echo preg_replace("/^[a-z]+[0-9]+(\.[a-z,0-9]+)*@[a-z]+\.(org|es|com)$/i", "luis Miguel", $texto2) ."<br>";
	
} else {
	echo "El correo no se acepta <br>";
}


if (preg_match("/^[a-z,0-9]+\.*[a-z,0-9]*@[a-z]+\.(org|es|com)$/i", $correo3)) {

	echo preg_replace("/^[a-z]+[0-9]+(\.[a-z,0-9]+)*@[a-z]+\.(org|es|com)$/i", "luis Miguel", $texto3)."<br>";
	
} else {
	echo "El correo no se acepta <br>";
}

if (preg_match("/^[a-z,0-9]+\.*[a-z,0-9]*@[a-z]+\.(org|es|com)$/i", $correo4)) {

	echo preg_replace("/^[a-z]+[0-9]+(\.[a-z,0-9]+)*@[a-z]+\.(org|es|com)$/i", "luis Miguel", $texto4)."<br>";
	
} else {
	echo "El correo no se acepta <br>";
}

if (preg_match("/^[a-z]+[0-9]+(\.[a-z,0-9]+)*@[a-z]+\.(org|es|com)$/i", $correo5)) {

	echo preg_replace("/^[a-z]+[0-9]+(\.[a-z,0-9]+)*@[a-z]+\.(org|es|com)$/i", "luis Miguel", $texto5)."<br>";
	
} else {
	echo "El correo no se acepta <br>";
}





?>