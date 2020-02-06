    /*Alejandro José Jurado Reyes*/
    $(document).ready(function(){
        //esto oculta el error nada mas cargar la pagina
        $("#error").hide();
        //guardar = localStorage.setItem();
        var contador = 1;

        // Esta funcion sirver para agregar alumnos
        function agregarAlumno() {
            var nombre = $("#nombre").val();//Cogemos el varlor que se escribe en el imput nombre
            var telefono = $("#telefono").val();//Cogemos el varlor que se escribe en el imput nombre
            //Esto hace que no se pueda dejar los datos vacios
            if (nombre && telefono != 0) {
                //mayuscula =
                //var expresion = /[0-9]/
                //Agragamos en la lista los valores que hemos recogido arriba
                $("#lista").append("<li class = 'borrar'>"+"<p>"+"Nombre del alumno: "+ nombre + " , " + "Teléfono de contacto: " + telefono + "<p>"+  "</li>");

            }else {
                //si se intenta dejar los datos vacios sale un error que es un div
                $("#error").show();
            }
        }

        function guardarLocal() {
            var nombre = $("#nombre").val();
            var telefono = $("#telefono").val();
            if (nombre && telefono != 0) {
                //Guarda los campos en un objeto alumno
                let alumno =  {
                    nombre: nombre,
                    telefono: telefono
                }
                //guardo el obejto alumno en local storage
                localStorage.setItem(contador, JSON.stringify(alumno));
                contador++;
            }
        }

        function borrarDatos() {
            //Esta funcion borra todos los li con la clase borrar
            $(".borrar").remove();
            //Con esto borro todo lo que hay en el local storage
            for (var i = 0; i < 100; i++) {
                localStorage.removeItem(i);

            }


        }
        function cargarDatos() {
            for (var i = 1; i < 100; i++) {
                var alumno = localStorage.getItem(i);
                var alumno2 = JSON.parse (alumno);

                $("#lista").append("<li class = 'borrar'>" + alumno2 +"</li>");
            }
            /*var alumno = localStorage.getItem(contador);
            var alumno2 = JSON.parse (alumno);
            $("#lista").append("<li>" + alumno2 +"</li>");*/
        }
        //Cuando le damos click al boton guardar llama a las respectivas funciones
        $("#guardar").click(function(){
            //Esto sirve para llmar a la funcion de agregar alumno para que se escriba en la pantalla
            agregarAlumno();
            //Esto sirve para llamar a la funcion que guarda a los alumnos
            guardarLocal();
            //esto vacia los campos una vez rellenos
            $("#nombre").val("");
            $("#telefono").val("");
            //Pone siempre para que se pueda escribir
            nombre.focus();
        });

        $("#cargar").click(function(){
            cargarDatos();
        });

        //Al hacer clik en el boton de borrar borra los datos del localStorage y de la pantalla
        $("#borrar").click(function () {
            borrarDatos();
        });

        //Esto oculta el erro cuando vuelves a poner el cursor en el campo nombre
        $("#nombre").mousedown(function () {
            $("#error").hide();
        });

        //Esto oculta el erro cuando vuelves a poner el cursor en el campo telefono
        $("#telefono").mousedown(function () {
            $("#error").hide();
        });

    });
