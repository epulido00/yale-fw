<?php

class Inicio_model extends CI_Model {

    public function busqueda($str) {

        $resultados = array();

        if($str){

            $this->db->where('MATCH(titulo, descripcion) AGAINST ("'.$str.'")');
            $noticias = $this->db->get('noticias');

            if($noticias->num_rows() > 0) {
                foreach($noticias->result() as $noticia) {

                    $pos=strpos($noticia->descripcion, ' ', 300);
                    $descripcion = substr($noticia->descripcion,0,$pos ); 

                    $newRes = array(
                        'titulo'      => $noticia->titulo,
                        'descripcion' => $descripcion,
                        'link'        => base_url() . 'noticias/' . $noticia->id_noticia . '/' . $noticia->slug
                    );
                    
                    $resultados[] = json_decode(json_encode($newRes));
                }
            }

            $this->db->where('MATCH(titulo, descripcion) AGAINST ("'.$str.'")');
            $subtemas = $this->db->get('subtemas');

            if($subtemas->num_rows() > 0) {
                foreach($subtemas->result() as $subtema) {

                    if(strlen($subtema->descripcion) > 300) {
                        $pos=strpos($subtema->descripcion, ' ', 300);
                        $descripcion = substr($subtema->descripcion,0,$pos ); 
                    } else {
                        $descripcion = $subtema->descripcion;
                    }

                    $newRes = array(
                        'titulo'      => $subtema->titulo,
                        'descripcion' => $descripcion,
                        'link'        => base_url() . 'foro/subtema/' . $subtema->id_subtema . '/' . $subtema->slug
                    );
                    
                    $resultados[] = json_decode(json_encode($newRes));
                }
            }

            return $resultados;
        } else {
            return FALSE;
        }
    }

}

?>