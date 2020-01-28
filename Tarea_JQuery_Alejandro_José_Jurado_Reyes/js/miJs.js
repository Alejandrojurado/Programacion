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


        $('#anadir').click(function(){
            var elemento = $('#lista').val();
            if ($("#lista").val() != "") {
                var nuevoli = document.createElement("li");
                $(nuevoli).html(elemento);
                $("#lista_texto").append(nuevoli);

                $("#lista").val("");

            } else {
                $("#error").show();
            }

        });

        $(document).on("click", "#lista_texto > li" , function(){
            $(this).remove();

        });


        $("#reset").click(function(){
	           $("li").remove()
        });


        $("#lista").click(function() {
            $("#error").hide();

        });

    });
