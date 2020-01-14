//Alejandro José Jurado Reyes

//Ejercicio2

//Realiza una función que reciba una serie de cadenas de caracteres (string) y las muestre concatenadas y separadas por comas.
	

	
window.onload = function (){

		document.getElementById('enviar2').addEventListener('click',insertar_array,false);//Esto se enlaza con un botón para que se ejecute la funcion de abajo

		

		
        
}

	function insertar_array(){

	var cadena = new Array();//Defino un array vacio

	var j = prompt("Inserte el tamaño: ");//Inserto un número para que se defina el tamaño del array

	var tamano = j - 1; //Al número le resto uno puesto que los array empiezan en 0

	for (var i = 0; i <= tamano; i++) {//Recorro las posiciones y pido que inserten en el array datos 

		cadena[i]=prompt("Inserte las palabras: ");

		
	}
		
	
		for (var i = 0; i < cadena.length; i++) {//Recorro el array he imprimo lo que hay dentro

			document.write(cadena[i]+","); 	

		}
	}
		
		
	

	//document.getElementById('tamano').addEventListener('keydown',insertar_array);

	
	
	

