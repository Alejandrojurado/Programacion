//Alejandro José Jurado Reyes

//Ejercicio1

//Realiza una función que reciba un array de palabras y devuelva una cadena con la concatenación de todas ellas, separadas por comas. 
	


		document.getElementById('enviar1').addEventListener('click',imprimir_array,false);//Esto se enlaza con un botón para que se ejecute la funcion de abajo

		
        

	function imprimir_array(){

		var coche = new Array("Seat","Audi","BMW","Mazda","Toyota","Opel"); //Defino un array

		for (var i = 0 ; i < coche.length; i++) { //Recorro el array y lo imprimo

			document.write(coche[i] + ",");
			
		}	
	}