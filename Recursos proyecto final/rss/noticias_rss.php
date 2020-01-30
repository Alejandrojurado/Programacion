<?php

    require_once('db_abstract_model.php');

    /**
     *
     */
     #Esto es lo que salim explico sobre caracteres especiales
     header("Content-Type: text/html;charset=utf-8");
    class Noticias_rss extends DBAbstractModel{


        #Constructor
        function __construct(){
            $this->db_name = 'noticias';
        }

        #Métodos abtractos para ABM de clases que hereden.
		abstract protected function get(){
            $db_table = 'noticias';
            $this->query = "
                SELECT titulo as tittle, id_noticia as link, autor, fecha as pubDate,
                categoria as category, noticias as description
                FROM $db_table
                ORDER BY fecha DESC
            ";

            $this->get_results_from_query();

            //Mostrar el rss
            $data = '';
            $data .= '<?xml varsion="1.0" encoding = "UTF-8"?>';
            $data .= '<rss version = "2.0">';
            $data .= '<channel>';
            $data .= '<title>Rss noticias de melilla </title>';
            $data .= '<link>https://www.melillahoy.es/</link>';
            $data .= '<description>Las noticias más relevantes de la ciudad autonoma de melilla -funte melillahoy </description>';

            foreach ($this->rows as $key_fila => $fila) {
                $data .= '<item>';
                foreach ($value as $key => $campo) {
                    $data .= '<$key>$campo</$key>';
                }
                $data .= '</item>';
            }
            $data .= '</channel>';
            $data .= '</rss>';
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
