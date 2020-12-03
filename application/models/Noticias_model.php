<?php 


class Noticias_model extends CI_Model {

    public function getNoticias() {
        return $this->db->get('noticias')->result();
    }

}


?>