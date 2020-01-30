<?php
    require_once ('Logger.php');

    /**
     *
     */
    class Main extends Error{

        public function testLogger(){
            #crear Logger
            $bugLogger = new Logger();

            $resultado = 0 ;
            $divisor = 0;
            $division = 0;

            try {
                $resultado = $division / $divisor ;

            } catch (Error $e) {
                //$resultado = 0;
                $error = "TEST LOGGER: $e";
                $bugLogger->setMessage($error);
                $bugLogger->write_mysql_log();
                return -1;
            }

            return 0;
        }
    }
    $testeo = new Main();
    echo $testeo->testLogger();
 ?>
