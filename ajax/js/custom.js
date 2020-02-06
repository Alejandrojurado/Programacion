$(document).ready(function () {
    console.log("ready!");
    $("#sugerencia").keyup(function () {
        $.ajax({
            data: parametros,
            url: 'ejemplo_ajax_proceso.php',
            type: 'post',
            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor");
            },
            success: function (response) {
                $("#resultado").html(response.catidad);
                $("#consola").html(JOSN.stringify(response));
            }
        });

    });
}



});
function realizaProcesos() {
    var caja1 = $("#valor1").val();
    var caja2 = $("#valor2").val();
    parseInt(caja1);
    parseInt(caja2);
    var parametros = {
        "valorCaja1": caja1,
        "valorCaja2": caja2
    };

    //alert(parseInt(parametros.valorCaja1) + parseInt(parametros.valorCaja2));
}


