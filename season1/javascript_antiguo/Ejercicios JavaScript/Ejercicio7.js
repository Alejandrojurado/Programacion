//Alejandro José Jurado Reyes 

document.write("Ejercicio7");
var seleccion = prompt("selecione si es con iva (1) o si es con ipsi (2) ");


if (seleccion == 1) {

	var precio_iva = prompt("Escribe el primer precio con iva ");

	var resta = precio_iva *0.21 ;
	var siniva = precio_iva - resta ;

	document.write("<br>");
	document.write("El precio sin iva es: " + siniva); 
	document.write("<br>");
	var restaipsi = siniva *0.04;

	var ipsi = siniva + restaipsi ;

	document.write("El precio con ipsi es: " + ipsi); 
	document.write("<br>");
} else {
	var precio_ipsi = prompt("Escribe el primer precio con ipsi ");

	var resta = precio_ipsi *0.04 ;
	var sin_ipsi = precio_ipsi - resta;

	document.write("<br>");
	document.write("El precio sin ipsi es: " + sin_ipsi ); 

	var iva = sin_ipsi *0.21;

	var con_iva = iva + sin_ipsi;

	document.write("<br>");
	document.write("El precio con iva es: " + con_iva );










}







