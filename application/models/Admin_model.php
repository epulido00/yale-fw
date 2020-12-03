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

}


?>