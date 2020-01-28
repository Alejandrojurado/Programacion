<?php www.comunidadarma.es
    require_once ('logger.php');

    #crear Logger

    $message = "Fallo";
    $log1 = new Logger();
    $log1->set($message);
    $log1->get($message);
    $log1->write_mysql_log($message);



 ?>
