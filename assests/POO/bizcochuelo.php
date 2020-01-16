<?php

    /**
     *
     */
     require_once('iPostre.php');
     class Bizcochuelo implements iPostre{
         public $ingredientes;
         //private $modo;

         //contructor de la clase
         public function __construct(){
             $this->ingredientes = array();
             //$this->modo = "rapido";

         }
          public function set_ingredientes(){
             $this->ingredientes = array('harina' => '2 tazas','leche'=>'1 taza','azucar'=>'1 taza', 'huevo'=>1 );

         }
         public function procesar_ingredientes(){
              echo "Receta procesada en modo $this->modo";

         }
        /* public function set_modo(){
              $this->modo = $modo;


         }
         public function get_modo(){
             return $this->modo;

         }*/
     }
     //main 
     $b1 = new Bizcochuelo();
     $b1->set_ingredientes();
     $b1->procesar_ingredientes();
     var_dump($b1->ingredientes);
     $b1->procesar_ingredientes;
     $b1->set_modo("lento");
     echo $b1->get_modo();
     $b1->procesar_ingredientes();













 ?>
