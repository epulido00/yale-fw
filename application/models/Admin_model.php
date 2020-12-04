<?php 


class Admin_model extends CI_Model {

    public function addNoticia($data) {
        if($data) {
            $newNoticia = array(
                'titulo' => $data->post('titulo'),
                'descripcion' => $data->post('descripcion'),
                'imagen' => $data->post('imagen')
            );

            $this->db->insert('noticias', $newNoticia);
        }
    }

    public function addEvento($data) {
        if($data) {
            $newEvento = array(
                'nombre' => $data->post('nombre'),
                'descripcion' => $data->post('descripcion'),
                'fecha_evento' => date_format(date_create($data->post('fecha_evento')), 'Y-m-d H:i:s')
            );

            //date_format(date_create($comentario->fecha_creacion), 'j \d\e F \d\e\l Y \a \l\a\s h:i a')

            $this->db->insert('eventos', $newEvento);
        }
    }

}


?>