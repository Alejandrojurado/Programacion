
	$(document).ready(function() {
		//Se inicializa el contador
		init();
		//Escondo el mensaje de error
		$("#error").hide();


			mostrarLista();
		// Mostrar lista de contactos que haya introducidos previamente en el almacenamiento local

		// Se introduce el elemento en la lista y se guarda localmente
		$("#botonStore").click(function () {
			guardarElemento();
		});
		// Se elimina el elemento de la lista cuando se hace click sobre él y también del almacenamiento local
		// Previamente, se añade la clase animacion para mostrar al usuario que es un elemento interactivos
		$("#botonDiscard").click(function () {
			eliminar();

		});

		$("#botonSave").click(function() {
			eliminarElemento();

		});

		//Lo que hacen estas llamadas ha funcion es si hacemos click en cualquier input oculta el error que sala si no rellenamos cualquier campo
		$("#firstName").mousedown(function () {
			ocultarError();

		});
		$("#lastName").mousedown(function () {
			ocultarError();

		});
		$("#email").mousedown(function () {
			ocultarError();

		});

	});


	// Inicializa la aplicación.
	// Se oculta el mensaje de aviso al usuario sobre la introducción de datos.
	// Contactos:index, almacena el numero de entradas realizadas hasta el momento y continúa siempre por el valor que tenga asignado.
	// Comprobamos si hay elementos guardados en almacenamiento local, mirando esa clave (Contactos:index). Si no existe, se crea
	// y se inicializa a 1.
	function init(){

		contador = localStorage.getItem("Contactos:index");
		if (!contador) {
			window.localStorage.setItem("Contactos:index", contador = 1);
		}


	}

	// Mostrar lista de contactos que haya introducidos previamente en el almacenamiento local
	function mostrarLista(){

		/* lis = localStorage.getItem("Contactos:index");
			console.log(lis);

			for (var i = 0; i<lis ; i++) {

			 persona = JSON.parse(persona);

				localStorage.getItem(JSON.parse());

				//$("#contactos-lista").append("<li class = 'borrar'  >" + persona.nombre + " " + persona.apellido + " "+persona.email + " " +"</li>");



		}*/

	}

	// Se introduce el elemento en la lista y se guarda localmente
	function guardarElemento(){
		//Guardo en variables lo que escriben en el input
		var nombre = $("#firstName").val();
		var apellido = $("#lastName").val();
		var email = $("#email").val();
		//comprobamos si estan vacias cualquiera de las variables para que no se siga ejecutando lo que hay dentro
		if (nombre != "" && apellido != "" && email != "" ) {
			//añado una lista con el nombre ,apellidos , email
			$("#contactos-lista").append("<li class = 'borrar'  >" + "Nombre y apellido: " + nombre + " " + apellido + " , Email: "+email + " " +"</li>");
			//Creo una variable para guardar toda la infomacion
			var persona = {
				id: contador,
				nombre: nombre,
				apellido: apellido,
				email: email
			}
			//Guardo los datos del usuario con el contador
			localStorage.setItem("Contactos" + ":"+ contador , JSON.stringify(persona));

			//Los imput los vacio y pongo el foco en el nombbre
			$("#firstName").val("");
			$("#lastName").val("");
			$("#email").val("");
			$("#firstName").focus();
			//aumento el contador
			contador ++;
			//lo guardo en localStorage para que no se pierda y poder volver a usarlo mas adelante
			localStorage.setItem("Contactos:index", contador);
		}
		//si esta vacia cualquiera de las variables enseña un error
		else {

			$("#error").show();
		}

	}

	// Se elimina el elemento de la lista cuando se hace click sobre él y también del almacenamiento local
	// Previamente, se añade la clase animacion para mostrar al usuario que es un elemento interactivo
	function eliminar(){file:///home/alejandro/Documentos/DWEC_Examen_Rec_2T%20LOCAL_AlejandroJos%C3%A9JuradoReyes/DWEC_Examen_Rec_2T%20LOCAL/examenRec2T.html?id_entrada=0
		//Borro la lista que esta creada que tiene la clase borrar
		$(".borrar").remove();
		//borro todo lo que esta en la localStorage
		//localStorage.clear();
	}
	// Se oculta el mensaje de error
	function ocultarError(){
		$("#error").hide();
	}

	function eliminarElemento() {


	}
