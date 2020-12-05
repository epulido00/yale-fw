<?php 


class Noticias_model extends CI_Model {

    public function getNoticias() {
        return $this->db->get('noticias')->result();
    }

    public function getNoticia($id_noticia, $slug) {
        $this->db->where('id_noticia', $id_noticia);
        $this->db->where('slug', $slug);
        $noticia = $this->db->get('noticias');
        
        if($noticia->num_rows() > 0) {
            return $noticia->row();
        } else {
            return false;
        }
    }

}


?>