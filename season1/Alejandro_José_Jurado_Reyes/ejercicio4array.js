//Alejandro José Jurado Reyes 



document.getElementById('enviar4').addEventListener('click',cadena,false);

function cadena() {
	

	var cadena = prompt ("Introduzca una cadena: ");
	            var arraydecadena = cadena.split(" ");
	            var primerapalabra = arraydecadena[0];
	            var ultimapalabra = arraydecadena[arraydecadena.length - 1];

	            document.write("La cadena introducida es " + cadena + "<br>"+"\nTiene " + (arraydecadena.length)+  
	                    " palabras"+"<br>"+"\nLa primera palabra es " + primerapalabra +
	                    "<br>"+"\nLa ultima palabra es " + ultimapalabra+ 
	                    "<br>"+"\nLa cadena con las palabras colocadas en orden inverso es " + arraydecadena.reverse().join(" ") +
	                    "<br>"+"\nLa cadena con las palabras ordenadas de la a a la z es " + arraydecadena.sort().join(" ")+ 
	                   	"<br>"+ "\nLa cadena con las palabras ordenadas de la z a la a es " + arraydecadena.sort().reverse().join(" "));

}