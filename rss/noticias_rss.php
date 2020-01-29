<?php

    require_once('db_abstract_model.php');

    /**
     *
     */
    class Noticias_rss extends DBAbstractModel{

        #Esto es lo que salim explico sobre caracteres especiales
        header("Content-Type: text/html;charset=utf-8")
        #Constructor
        function __construct(argument){
            $this->db_name = 'noticias';
        }

        #Métodos abtractos para ABM de clases que hereden.
		abstract protected function get(){
            $db_table = 'noticias';
            $this->query = "
                SELECT id_noticia, autor, titulo, categoria, fecha, noticia
                FROM $db_table
                ORDER BY fecha DESC
            ";

            $this->get_results_from_query();

            //Mostrar el rss
            $data = '';
            $data .= '<?xml varsion="1.0" encoding = "UTF-8"?>';
            $data .= '<rss version = "2.0">';
            $data .= '<channel>';
            $data .= '<title></title>';
            $data .= '<link></link>';
            $data .= '<description></description>';


            $data .= '<item>';
                $data .= '<title>Sanchez y torra</title>';
                $data .= '<link>...?id=1</link>';
                $data .= '<autor>Pedro del Rosal</autor>';
                $data .= '<pubDate>2018-12-31 12:13:16</pubDate>';
                $data .= '<category>Actualidad-Cataluña</category>';
                $data .= '<description>Sanchez ha traicionado el pacto con los subnormales</description>';
            $data .= '</item>';

            while () {

            }

            /*if(count($this->rows) > 0):
                foreach ($this->rows[0] as $propiedad=>$valor):

                    $this->$propiedad = $valor;
                endforeach;
            endif;    */
        }
		abstract protected function set(){
            return null;
        }
		abstract protected function edit(){
            return null;
        }
		abstract protected function delete(){
            return null;
        }

    }
 ?>
