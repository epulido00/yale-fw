<?php 

class Foro_model extends CI_Model {

    public function getTemas() {
        return $this->db->get('temas')->result();
    }

    public function getSubtemas($id_tema) {
        $this->db->where('id_tema', $id_tema);

        $this->db->order_by('fecha_creacion', 'ASC');

        return $this->db->get('subtemas')->result();
    }

}

?>