//Alejandro José Jurado Reyes 

//Ejercicio3

/*Realiza una función que reciba una serie de números. Debes separarlos en un array para buscar si hay repetidos. 
Si uno de los valores es cero, se detiene en ese instante.
Mostrará, como resultado, los números repetidos y el número de veces que aparece cada uno.*/
	
function modNumero() {
	var lista = [];//defino el array 
	lista = formulario.str.value.split(" "); 
	var repetido = 0;
	var lista_limpio = [];
	var lista_repetido = [];
	fin.innerHTML = lista;
	fin2.innerHTML = "";
	for (var i = 0; i < lista.length; i++) {
		var iter = 0;
		var salir = false;
		for (var x = 0; x < lista_limpio.length; x++) {
			if (lista_limpio[x] == lista[i]) {
				salir = true;
				break;
			}
		}
		if(salir){
			continue;
		}
		for (var j = 0; j < lista.length; j++) {
			if (lista[j] == 0) {
				break;
			}
			if (lista[i] == lista[j]) {
				iter++;
			}
		}
		if(iter > 1){
			lista_limpio[repetido] = lista[i];
			lista_repetido[repetido] = iter;
			repetido++;
		}
	}
	for (var y = 0; y < lista_limpio.length; y++) {
		fin2.innerHTML += "El número " + lista_limpio[y] + " se repite " + lista_repetido[y] + " veces.<br>";
	}
}

var botton = document.getElementById("enviar3");
botton.addEventListener("click",modNumero);
var result = document.getElementById("str");
result.addEventListener("keydown",modNumero,false);
			
