
    $(document).ready(function(){
        $("a").mouseover(function(event){
            $("#capa").addClass("clasecss");
        });
        $("a").mouseout(function(event){
            $("#capa").removeClass("clasecss");
        });
    });



   document.getElementById('capa').addEventListener("mouseover", cambiarEstilo, false);
   document.getElementById('capa').addEventListener("mouseout", quitarEstilo, false);

   function cambiarEstilo() {
       document.getElementById("capa").className = "clasecss";

   }

   function quitarEstilo() {

        document.getElementById("capa").className = "";
   }

   //Boton mayor de edad


     document.getElementById("edad").addEventListener('click' , mostrar, false);

     function mostrar(){

            document.getElementsByClassName('capa1').className = "";

    }
