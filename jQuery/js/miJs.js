    /*Funcion de Capturar, Almacenar datos y Limpiar campos*/
    $(document).ready(function(){
        $('#button-save').click(function(){
            /*Captura de datos escrito en los inputs*/
            var name = document.getElementById('nametxt').value;
            var lastname = document.getElementById('lastnametxt').value;
            /*Guardando los datos en el LocalStorage*/
            localStorage.setItem("name",name);
            localStorage.setItem("lastname",lastname);
            /*Guardando los datos en el LocalStorage*/
            document.getElementById('nametxt').value = "";
            document.getElementById('lastnametxt').value = "";

        });
    });

    $(document).ready(function(){
        $('#button-load').click(function(){
             /*Obtener datos almacenados*/
             var name2 = localStorage.getItem("name");
             var lastname2 = localStorage.getItem("lastname");
             /*Mostrar datos almacenados*/
             document.getElementById("name").innerHTML = name2;
             document.getElementById('lastname').innerHTML = lastname2;
        });

    });

        save_localstorage();
        load_localstorage();

    function load_localstorage(){
        if (localStorage.getItem("name")) {
            let name = localStorage.getItem("name");
            let person = JSON.parse(localStorage.getItem("person"));
            console.log(name);
            console.log(person);
        } else {
            console.log("No hay entradas en la storage");
        }
    }

    function save_localstorage() {
        let person = {
            Name: "Alejandro",
            age: 20,
            email: "hola@gmail.com",
            cords:{
                lat: 10,
                lng: -10
            }
        };
        let name = "pablo";

        localStorage.setItem("name",name);
        localStorage.setItem("person",JSON.stringify(person));
    }
