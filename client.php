<?php
    #Para evitar configurar directamente el archivo de configuración de PHP
    #Podemos realizarlo directamente en el codigo,
    #deshabilitaremos el cache de los wsdl para soap.
    ini_set('soap.wsdl_cache_enabled', 0);

    #Especificamos el wsdl que utilizaremos en nuestro servicio web.
    $wsdl = 'https://alexguerrero.000webhostapp.com/ws_test/server.php?wsdl';

    #Instanciamos un cliente nativo de la clase de PHP con el $wsdl especificado anteriormente.
    $client = new SoapClient($wsdl);

    #El cliente tiene varias funciones para obtener información, una de esas es:
    #__getFunctions() la cual nos listara todas las acciones soap que contiene un servicio web.
    var_dump($client->__getFunctions());

    #Realizamos la llamada al servicio web con __soapCall
    #Donde el primer parametro es la accion que llamara, y el segundo los parametros esperados por el web service
    $respuestaSaludar = $client->__soapCall('saludar', array('nombre' => 'Alejandro José Jurado Reyes'));
    print_r($respuestaSaludar);

    $respuestaValidar = $client->__soapCall('valida_rut', array('rut' => '1-9'));
    print_r($respuestaValidar);

    /*
    En ocaciones es necesario capturar la excepciones de las llamadas, lo cual se realiza con 
    el try catch capturando el tipo de excepcion SoapFault
    try {
        #llamada al servicio web
    } catch (SoapFault $e) {
        echo var_dump($e);
    }
    */

?>