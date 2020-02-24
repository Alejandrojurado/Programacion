<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Ejemplo sencillo de AJAX</title>


    </head>
    <body>
        Busqueda de productos
        <textarea name="texarea" id="sugerencia"></textarea>

        <br>
        Introduce valor1
        <input type="text" name="caja_texto" id="valor1" value="0"/>

        Introduce valor2
        <input type="text" name="caja_texto" id="valor2" value="0"/>

        Realiza suma
        <input type="button"  onclick="realizaProcesos()" value="calcula"/>
        <br>

        resultado: <span id="resultado">0</span><br>



        <textarea id="consola"></textarea>

        <!--JavaScript-->
        <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>

    </body>

</html>
