

//Alejandro José Jurado Reyes 
document.write("Ejercicio2");
document.write("<br>");
for (var i = 1 ; i <= 10; i++) {
	document.write("tabla de multiplicar " +i+ ",");
	document.write( i ) ;

	for (var j = 1 ; j <= 10; j++) {

		document.write( "," + i * j );
	}
	document.write("<br>");
}