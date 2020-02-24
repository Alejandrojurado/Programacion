    /*Funcion de Capturar, Almacenar datos y Limpiar campos*/
    $(document).ready(function(){
        $("#error").hide();
        $('#ocultar').click(function(){
            $('#elemento').hide();
        });

        $('#mostrar').click(function(){
            $('#elemento').show();
        });

        $('#toggle').click(function(){
            $('#elemento').toggle();
        });


            var storage = sessionStorage;
            var contador = 1;

            $('#anadir').click(function(){
                var elemento = $('#lista').val();
                var mayuscula = elemento.charAt(0).toUpperCase() + elemento.slice(1);
                if ($("#lista").val() != "") {
                    var nuevoli = document.createElement("li");
                    $(nuevoli).html(mayuscula);
                    $("#lista_texto").append(nuevoli);
                    $("#lista").val("");
                    //Focus solo funciona en Firefox y no se puede ejecutar en google chrome
                    $("#lista").focus();
                    storage.setItem(contador,mayuscula);
                    contador++;
                }
                else {
                    $("#error").show();
                }
            });


            $(document).on("click", "#lista_texto > li" , function(){
                $(this).remove();

            });


            $("#reset").click(function(){
    	           $("li").remove();
                   clave = $("#clave").val();
                   $("#clave").val("");
                   storage.removeItem(clave);

            });

            $("#delete").click(function () {
                clave = $("#clave").val();
                $("#clave").val("");
                storage.removeItem(clave);

            });


            $("#lista").click(function() {
                $("#error").hide();

            });

    });
