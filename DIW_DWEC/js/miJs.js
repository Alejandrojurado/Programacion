
    $(document).ready(function(){
        $("#ocultar").click(function(event){
            event.preventDefault();
            $("#capaefectos").hide("slow");
        });

        $("#mostrar").click(function(event){
            event.preventDefault();
            $("#capaefectos").show(3000);
        });
    });


    $("#micapa").fadeOut(1000, function(){
        $("#micapa").css({'top': 300, 'left':200});
        $("#micapa").fadeIn(1000);
    });
